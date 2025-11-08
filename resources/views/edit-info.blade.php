<!DOCTYPE html>
<html lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>تعديل الملف الشخصي</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="includes/images/favicon.png">

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="done">
    <meta property="og:description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <meta property="og:type" content="website">
</head>

<body class="bg-light">
    @include('includes.fixedbar')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . auth()->user()->profile_img) }}" alt="صورة الملف الشخصي" 
                                class="rounded-circle shadow-sm" width="100" height="100" id="profile-image">
                            <h4 class="mt-3">تعديل الملف الشخصي</h4>
                        </div>

                        <form id="profile-upload-form" enctype="multipart/form-data" action="{{ route('profileImg.update') }}" method="post">
                            @csrf
                            <input name="profile_img" type="file" id="file-upload" class="d-none">
                        </form>

                        <script>
                            document.getElementById('profile-image').addEventListener('click', function() {
                                document.getElementById('file-upload').click();
                            });

                            document.getElementById('file-upload').addEventListener('change', function() {
                                if (this.files.length > 0) {
                                    document.getElementById('profile-upload-form').submit();
                                }
                            });
                        </script>

                        <form enctype="multipart/form-data" action="{{ route('profile.post') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input name="name" value="{{ auth()->user()->name }}" type="text" 
                                    class="form-control text-end" placeholder="أدخل اسمك">
                            </div>
                            <div class="mb-3">
                                <input name="phone" value="{{ auth()->user()->phone }}" type="text" 
                                    class="form-control text-end" placeholder="أدخل رقم جوالك">
                            </div>
                            <div class="mb-3">
                                <input name="address" value="{{ auth()->user()->address }}" type="text" 
                                    class="form-control text-end" placeholder="ادخل العنوان">
                            </div>
                            <div class="mb-3">
                                <input name="email" value="{{ auth()->user()->email }}" type="email" 
                                    class="form-control text-end" placeholder="أدخل البريد الالكتروني">
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control text-end" 
                                    placeholder="كلمة السر">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mb-3">تحديث البيانات</button>
                        </form>

                        <form enctype="multipart/form-data" action="{{ route('carImg.update') }}" 
                            method="post" id="car-upload-form">
                            @csrf
                            <div class="mb-3">
                                <label for="car-upload" class="btn btn-dark w-100">أضغط لتحديث صورة سياراتك</label>
                                <input id="car-upload" name="car_img" type="file" class="d-none"
                                    onchange="document.getElementById('car-upload-form').submit()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>