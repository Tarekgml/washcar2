<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\CompanyMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Models\Ad;
use App\Models\Appointment;
use App\Models\Car;

use App\Models\CarRental;
use App\Models\SellCar;

use App\Models\SellCarOrder;
use App\Models\Cart;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\Website;
use App\Models\CoinsProduct;
use App\Models\CoinsOrder;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
        Route::view('/reivew/{id}', 'rev')->name('rev');

Route::middleware('guest')->group(function() {
    Route::view('/login', 'signin')->name('login');
    Route::view('/signup', 'signup')->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');
    Route::post('/login', [AuthController::class, 'signIn'])->name('login.post');
    Route::view('/forgot_password', 'forget_pass')->name('forgot_pass');
    Route::view('/reset_password/{id}', 'reset_pass')->name('reset_pass');

Route::post('/reset-password', function (Illuminate\Http\Request $request) {
    $request->validate([
        'token' => 'required',
        'newPassword' => 'required|min:8',
        'confirmPassword' => 'required|same:newPassword',
    ]);

    // Find the user by token
    $user = App\Models\User::where('password_reset_token', $request->token)->first();

    if (!$user) {
        return redirect()->back()->withErrors(['error' => 'Invalid or expired token']);
    }

    // Update the password and clear the token
    $user->password = bcrypt($request->newPassword);
    $user->password_reset_token = null; // Invalidate the token
    $user->save();

    return redirect('/login')->with('success', 'Password updated successfully!');
});



    Route::view('/company-signup', 'company-account.signup')->name('company-signup');
    Route::post('/company-signup', [AuthController::class, 'companySignup'])->name('company-signup.post');
    Route::view('/company-login', 'company-account.login')->name('company-login');
    Route::post('/company-login', [AuthController::class, 'companySignIn'])->name('company-login.post');

});

        Route::view('/', 'index')->name('home');

Route::middleware('auth')->group(function() {
    Route::view('/notifications', 'notification')->name('notification');
    Route::middleware(CompanyMiddleware::class)->group(function() {
        Route::post('/change-appointment-status', function () {
            $appointment = Appointment::find(request()->id);
            $appointment->status = request()->status;
            $user = \App\Models\User::find($appointment->user_id);
            $copmany = \App\Models\User::find($appointment->company_id);
            if(request()->status == 'مرفوض') {
                $user->balance += $copmany->price + ($company->price * \App\Models\Website::first()->ratio/100);
                $copmany->balance -= $copmany->price;
                $user->save();
                $copmany->save();
                \App\Models\Notification::create([
                        'user_id'=> $user->id,
                        'message'=> 'لقد تم رفض معاد الغسيل الخاص بك'
                    ]);
            }
            $appointment->save();
            
            return redirect()->back()->with('success', 'Appointment status updated successfully.');

        })->name('change-appointment-status');
        Route::view('/company-profile', 'company-account.myprofile')->name('company-profile');
        Route::view('/company-edit', 'company-account.edit-info')->name('company-profile.edit');
        Route::post('/company-profile/update', [AuthController::class, 'companyProfile'])->name('company-profile.update');
        Route::view('/company-wallet', 'company-account.wallet')->name('company-wallet');
        Route::view('/company-withdrawal-history', 'company-account.Withdrawal-history')->name('company-withdrawal-history');
        Route::view('/company-my-ads', 'company-account.my-ads')->name('company-my-ads');
        Route::view('/company-ads-data/{id}', 'company-account.ads-data')->name('company-ads-data');
        Route::view('/company-new-add', 'company-account.new-add')->name('company-new-add');
        Route::view('/company-history', 'company-account.orders-history')->name('orders-history');
        Route::view('/orders-home', 'company-account.orders-home')->name('orders.home');
        Route::view('/company_setting', 'company-account.company_setting')->name('company_setting');
        Route::post('/withdraw', function() {
            request()->validate([
                'amount' => 'required|numeric|min:1',
                'method' => 'required',
            ]);
            if(auth()->user()->balance < request()->amount) {
                return redirect()->route('company-wallet')->withErrors('Insufficient balance.');
            }
            $user = auth()->user();
            $user->balance -= request()->amount;
            $user->save();
            \App\Models\Withdraw::create([
                'user_id'=> auth()->user()->id,
                'amount' => request()->amount,
                'method' => request()->method,
                'status'=> 'pending',
            ]);
                            \App\Models\Notification::create([
                        'user_id'=> $user->id,
                        'message'=> 'لقد تم إرسال طلب سحب بنجاح'
                    ]);
            return redirect()->route('company-withdrawal-history')->with('success', 'Withdraw request sent successfully.');
        })->name('withdraw.post');
        Route::post('/company-new-add', function() {
            request()->validate([
                'title' => 'required',
                'description' => 'required',
                'img' => 'required|image',
            ]);
            if(auth()->user()->balance < Website::first()->add_price ) {
                return redirect()->back()->withErrors('لا يوجد لديك رصيد كافي');
            }
            $image = request()->file('img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage');
            $image->move($destinationPath, $filename);
            
            Ad::create([
                'user_id' => auth()->user()->id,
                'title' => request()->title,
                'description' => request()->description,
                'img' => $filename,
                'status' => 'pending',
            ]);
            $user = auth()->user();
            $user->balance -= Website::first()->add_price;
            $user->save();
            return redirect()->route('company-new-add')->with('success', 'Ad created successfully.');
        })->name('company-new-add.post');
        Route::post('/addPost', function() {
            request()->validate([
                'img' => 'required|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480', // 20MB max
            ]);
            $media = request()->file('img');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            $destinationPath = public_path('/storage');
            $media->move($destinationPath, $filename);
            // Determine if the file is a video based on its mime type
            $isVideo = in_array($media->getClientMimeType(), [
                'video/mp4',
                'video/quicktime',
                'video/x-msvideo'
            ]);
            Post::create([
                'user_id' => auth()->user()->id,
                'img' => $filename,
            ]);
            return redirect()->back()->with('success', 'Post Uploaded Successfully');
        })->name('addPost');

        
        Route::post('/appointment', function() {
            $appointment = Appointment::find(request()->id);
            $appointment->meet_link = request()->meet_link;
            $appointment->save();
            return redirect()->back()->with('success', 'Meet link updated successfully.');
        })->name('appointment.meet');
        Route::post('/offer', function() {
            request()->validate([
                'company_id' => 'required',
                'quantity' => 'required',
                'gift' => 'required',
            ]);
            Offer::create(request()->all());
            return redirect()->back()->with('success', 'تمت إضافة العرض بنجاح');
        })->name('offer.post');

    });
    Route::view('/history', 'history')->name('history');
    Route::view('/under-revision', 'company-account.under-revision');
    Route::middleware(UserMiddleware::class)->group(function() {
Route::post('/sellYourCar/post', function (Request $request) {
    // Validate incoming request data
    $validatedData = request()->validate([
        'owner_name' => 'required|string|max:255',
        'contact_number' => 'required|string|max:20',
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer|min:1900|max:' . date('Y'),
        'price' => 'required|numeric|min:0',
        'des' => 'nullable|string',
        'images' => 'nullable|array',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // adjust as needed
        'status' => 'nullable|string',
    ]);

    // Create a new sell car entry
    $sellCar = new SellCarOrder();
    $sellCar->uuid = str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT); // Generate a zero-padded random UUID
    $sellCar->user_id = auth()->user()->id;
    $sellCar->owner_name = $validatedData['owner_name'];
    $sellCar->contact_number = $validatedData['contact_number'];
    $sellCar->brand = $validatedData['brand'];
    $sellCar->model = $validatedData['model'];
    $sellCar->year = $validatedData['year'];
    $sellCar->price = $validatedData['price'];
    $sellCar->des = $validatedData['des'] ?? null;

    // Process images
    if (request()->has('images')) {
        $imagePaths = [];
        foreach (request()->file('images') as $image) {
            // Store images in the storage/app/public/data directory
            $path = $image->store('', 'public'); // Store in storage/app/public/data
            $imagePaths[] = $path;
        }
        $sellCar->images = $imagePaths; // Store paths as array
    }


    $sellCar->status =  'قيد المراجعة';
    $sellCar->save();

    return redirect()->back()->with('success', 'تم رفع الطلب بنجاح');
})->name('sellCarPost');

        Route::view('/sell_yourcar_orders', 'sell_yourcar_orders')->name('sell_yourcar_orders');
        Route::view('/sell_yourcar', 'sell_yourcar')->name('sell_yourcar');
        Route::view('/about', 'About-us')->name('about');
        Route::view('/policy', 'Policy')->name('policy');
        Route::view('/profile', 'myprofile')->name('profile');
        Route::view('/edit-info', 'edit-info')->name('edit-info');
Route::post('/profile/update', function() {
   request()->validate([
       'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);
    $user = auth()->user();
    if (request()->hasFile('profile_img')) {
       $image = request()->file('profile_img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       
       // Create directory if it doesn't exist
       $destinationPath = public_path('storage/storage');
       if (!file_exists($destinationPath)) {
           mkdir($destinationPath, 0777, true);
       }
       
       // Move the file
       $image->move($destinationPath, $filename);
       
       // Update user's profile image path
       $user->profile_img = 'storage/' . $filename;
       $user->save();
   }
    return back()->with('success', 'Profile updated successfully.');
})->name('profileImg.update');
Route::post('/car/update', function() {
   request()->validate([
       'car_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);
    $user = auth()->user();
    if (request()->hasFile('car_img')) {
       $image = request()->file('car_img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       
       // Create directory if it doesn't exist
       $destinationPath = public_path('storage/storage');
       if (!file_exists($destinationPath)) {
           mkdir($destinationPath, 0777, true);
       }
       
       // Move the file
       $image->move($destinationPath, $filename);
       
       // Update user's profile image path
       $user->car_img = 'storage/' . $filename;
       $user->save();
   }
    return back()->with('success', 'Car Image updated successfully.');
})->name('carImg.update');
        Route::post('/profile/update/all', [AuthController::class, 'profile'])->name('profile.post');
        Route::view('/wallet', 'wallet')->name('wallet');
        Route::view('/recharge', 'recharge')->name('recharge');
        Route::view('/Car-details/{id}','car-details')->name('car-details');
        
Route::get('/cart/delete/{id}', function($id) {
    $cart = Cart::where('user_id', auth()->user()->id)
                ->where('product_id', $id)
                ->first();

    if($cart) {
        $cart->delete();
        return redirect()->back()->with('success', 'Cart item deleted successfully.');
    } else {
        return redirect()->back()->withErrors('Cart item not found.');
    }
})->name('cart.delete');

        Route::post('/appointment/{id}', function($id) {
            $company = User::find($id);
            request()->validate([
                'day' => 'required',
                'time' => 'required',
                'notes' => 'nullable',
            ]);
            if(auth()->user()->balance < $company->price) {
                return redirect()->back()->withErrors('not enough balance.');
            }
            $company->balance +=  $company->price;
            $user = auth()->user();
            $user->balance -= $company->price + ($company->price * \App\Models\Website::first()->ratio/100);
            $company->save();
            $user->save();
            $appointment = Appointment::create([
                'company_id' => $id,
                'user_id' => auth()->user()->id,
                'day' => request()->day,
                'status' => 'pending',
                'car_type'=> request()->car_type,
                'wash'=> request()->wash,
                'time' => request()->time,
                'notes'=> request()->notes
            ]);
            $userEmail = $user->email;
             Mail::raw("لقد تم تسجيل معاد لغسيل سيارتك بنجاح", function ($message) use ($userEmail) {
        $message->to($userEmail)->subject('تم تسجيل المعاد بنجاح');
    });

            
                            \App\Models\Notification::create([
                        'user_id'=> auth()->user()->id,
                        'messsage'=> 'لقد لقد تم تسجيل معاد لغسيل سيارتك بنجاح'
                    ]);
            return redirect()->route('done', $appointment->id)->with('success', 'Appointment created successfully.');
        })->name('appointment');
        Route::post('/rate', function () {
            request()->validate([
                'rate' => 'required',
            ]);
            \App\Models\Rate::create([
                'company_id' => request()->company_id,
                'user_id' => request()->user_id,
                'appointment_id' => request()->appointment_id,
                'rate' => request()->rate,
                'comment'=> request()->comment
            ]);
            return redirect('/')->with('success', 'تمت إضافة تقييمك بنجاح');
        })->name('rate');
        Route::get('/buy/{id}', function ($id) {
            $product = CoinsProduct::find($id);
            if(auth()->user()->coins < $product->price) {
                return redirect()->back()->withErrors('لا توجد لديك عملات كافية');
            }

            CoinsOrder::create([
                'user_id'=> auth()->user()->id,
                'product_id' => $id,
            ]);
            return redirect()->back()->with('success', 'لقد تم شراء المنتج بنجاح');

        })->name('coinsBuyProduct');
    });
    Route::post('/carRental/{id}', function ($id) {
        $car = Car::find($id);
        if ($car->price > auth()->user()->balance) {
            return redirect()->back()->withErrors('لا يوجد لديك رصيد كافي');
        }
        $user = auth()->user();
        $user->balance -= $car->price;
        $user->save();
        $car = CarRental::create([
            'user_id'=> auth()->user()->id,
            'car_id'=> $id,
        ]);
        return redirect(route('doneCar', $car->id))->with('success','لقد تم إرسال طلب لإيجار السيارة بنجاح');
    })->name('rentCar');
    Route::post('/carSellRental/{id}', function ($id) {
        $car = SellCar::find($id);
        if ($car->price > auth()->user()->balance) {
            return redirect()->back()->withErrors('لا يوجد لديك رصيد كافي');
        }
        $user = auth()->user();
        $user->balance -= $car->price;
        $user->save();
        $car = SellCarOrder::create([
            'user_id'=> auth()->user()->id,
            'car_id'=> $id,
        ]);
        return redirect(route('doneSell', $car->id))->with('success','لقد تم إرسال طلب لبيع السيارة بنجاح');
    })->name('SellCar');
    Route::post('/coinsToBalance', function () {
        
        $user = auth()->user();
        if(request()->coins > $user->coins) {
            return redirect()->back()->withErros('لا يوجد لديك عملات كافية');
        }
        $user->balance += Website::all()[0]->coinsToBalance * request()->coins;
        $user->coins -= request()->coins;
        $user->save();
        
        return redirect('/')->with('success','لقد تم  الإستبدال بنجاح    ');
    })->name('coinsToBalance');
    Route::view('/done/{id}', 'done')->name('done');
        Route::view('/doneCar/{id}', 'doneCar')->name('doneCar');
        Route::view('/doneCarSell/{id}', 'doneSell')->name('doneSell');

    Route::get('logout', function() {
        auth()->logout();
        return redirect()->route('login');
    })->name('logout');

    Route::view('/live-car/{id}', 'live-car')->name('live-car');
        Route::view('/reward','reward')->name('reward');
    Route::view('/all-coins-products','all-coins-products')->name('all-coins-products');

    Route::view('/company-account/{id}', 'Company-account')->name('company-account');
    
});
        Route::post('/cart/update/{id}', function (Request $request, $id) {
                $order = Cart::find($id);

        if ($order) {
            $order->quantity = request()->quantity;
            $order->save();
        }

        return redirect()->back()->with('success', '');
        })->name('cart.update');
        
        Route::post('/cart/remove/{id}', function (Request $request, $id) {
        $order = Cart::find($id);

        if ($order) {
            $order->delete();
        }

        return redirect()->back()->with('success', '');
        })->name('cart.remove');
        
        
        Route::view('/all-company','all-company')->name('allCompany');
        
        Route::view('/all-rental','all-rental')->name('all-rental');
        
        Route::get('/search' , function (Request $request) {
             $query = request()->search; // Get the search query from the request
        // Searching through ModelOne, ModelTwo, and ModelThree
        $resultsModelOne = \App\Models\Product::where('name', 'LIKE', "%{$query}%")->get();
        $resultsModelTwo = \App\Models\SellCar::where('name', 'LIKE', "%{$query}%")->get();
        $resultsModelThree = \App\Models\Car::where('name', 'LIKE', "%{$query}%")->get();

        // Merge or organize the results
        $results = $resultsModelOne->merge($resultsModelTwo)->merge($resultsModelThree);

        // Return the results in your preferred format (e.g., JSON or view)
        return view('search', ['res' => $results]); 
        })->name('search');
        Route::view('/carSell-details/{id}','carSell-details')->name('carSell-details');
        Route::view('/all-products','all-products')->name('all-products');
            Route::view('/categories','categories')->name('categories');
        Route::view('/all-Accessories','all-Accessories')->name('all-Accessories');
        Route::view('/all-clean','all-clean')->name('all-clean');
        Route::view('/all-sell','all-sell')->name('all-sell');
                Route::view('/Product-details/{id}','Product-details')->name('Product-details');

Route::get('/cart/{id}', function($id) {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => 1,
            ]);
            
            return redirect(route('orders.view'))->with('success', 'تمت إضافة الطلب بنجاح');
        })->name('cart.view');
       Route::get('/orders/post', function() {
   // Get the current user
$user = auth()->user();

// Retrieve the user's cart items
$cartItems = Cart::where('user_id', $user->id)->get();

// Check if there are any items in the cart
if ($cartItems->isEmpty()) {
    return redirect()->back()->withErrors('Your cart is empty.');
}

// Initialize array to store receipt data
$receiptData = [];
$totalOrderPrice = 0;

// Loop through each cart item and create an order
foreach ($cartItems as $cartItem) {
    $product = Product::find($cartItem->product_id);

    // Check if the product exists
    if (!$product) {
        return redirect()->back()->withErrors('Product not found.');
    }

    // Calculate the total price for this item
    $totalPrice = $product->price * $cartItem->quantity;
    $totalOrderPrice += $totalPrice;

    // Add product data to receipt
    $receiptData[] = [
        'product_name' => $product->name,
        'quantity' => $cartItem->quantity,
        'price_per_unit' => $product->price,
        'total_price' => $totalPrice
    ];
}

// Check if user has enough balance
if ($totalOrderPrice > $user->balance) {
    return redirect()->back()->withErrors('ليس لديك رصيد كافي للشراء');
}

// Create the receipt
\App\Models\Receipt::create([
    'user_id' => $user->id,
    'data' => json_encode($receiptData),
    'total_amount' => $totalOrderPrice
]);

// Process orders and update user balance
foreach ($cartItems as $cartItem) {
    $product = Product::find($cartItem->product_id);
    $totalPrice = $product->price * $cartItem->quantity;
    
    // Update user balance and coins
    $user->balance -= $totalPrice;
    $user->coins += $cartItem->quantity;

    // Create an order
    Order::create([
        'user_id' => $user->id,
        'product_id' => $product->id,
        'quantity' => $cartItem->quantity,
        'status' => 'قيد المراجعة',
        'price' => $totalPrice,
    ]);

    // Remove the item from the cart
    $cartItem->delete();
}

// Save the user's updated balance and coins
$user->save();

    // Redirect back with a success message after all orders are created
    return redirect()->back()->with('success', 'تم انشاء فاتورة بنجاح');
})->name('orders.postt');
Route::view('/receipts/all', 'receiptAll')->name('receiptAll');

        Route::view('/reciept/{id}', 'reciept')->name('reciept');

                        Route::view('/orders', 'orders')->name('orders.view');

        Route::delete('/posts/delete/{id}', function($id) {
            $post = Post::findOrFail($id); // Ensures that a 404 response is returned if the post is not found
            // Check if the authenticated user owns the post
            if (auth()->id() != $post->user_id) {
                return redirect()->back()->withErrors('غير مسموح لك بحذف هذا المنشور');
            }
            
            // Delete the post
            $post->delete();
        
            return redirect()->back()->with('success', 'تم حذف المنشور بنجاح');
        })->name('posts.destroy');