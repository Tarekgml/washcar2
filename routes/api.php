<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/send-code', function (Request $request) {
    $email = $request->input('email');
    $user = User::where('email', $email)->first();

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    // Generate OTP
    $otp = rand(100000, 999999);
    $user->otp = $otp;
    $user->save();

    // Send OTP via email
    Mail::raw("Your OTP is: $otp", function ($message) use ($email) {
        $message->to($email)->subject('Your OTP Code');
    });

    return response()->json(['message' => 'OTP sent successfully']);
});

Route::post('/verify-code', function (Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $otp = $request->input('verificationCode');

    $user = App\Models\User::where('email', $email)->where('otp', $otp)->first();

    if (!$user) {
        return response()->json(['message' => 'Invalid OTP'], 400);
    }

    // OTP verified
    $token = Str::random(64); // Generate a secure random token
    $user->password_reset_token = $token; // Store token in database
    $user->otp = null; // Clear OTP
    $user->save();

    return response()->json(['message' => 'OTP verified successfully', 'token' => $token]);
});
