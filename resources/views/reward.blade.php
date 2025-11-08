<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords"
        content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>wash carrent  | نقاط المكافئة</title>
    <link rel="stylesheet" href="includes/css/style.css" media="screen">
    <link rel="stylesheet" href="includes/css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="includes/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="includes/js/main.js" defer=""></script>
    <meta name="generator" content="wash car">
    <link rel="icon" href="includes/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "wash car kw"
    }
  </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <meta property="og:type" content="website">


</head>

<body>
     @include('includes.fixedbar')

    <section>

        <h2 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 30px; color: rgb(73, 73, 73);">
            نقاط المكافأة

        </h2>
        <!----------------------------------------------->

        <h4 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 20px; color: rgb(73, 73, 73);">
            نقاطك: {{ auth()->user()->coins }}

        </h4>

        <!----------------------------------------------->

    
            <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
                <div id='exchangeCoins' style="text-align: center; background-color: #0097db; width: 120px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225); cursor: pointer;"
                    onclick="window.location.href='washcar.html';">
                    <img src="finance.png" alt="Icon 1"
                        style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-top: 10px;">
                    <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px;"> استبدل بنقود </p>
                </div>
                <div style="text-align: center; background-color: #0097db; width: 120px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225) ; cursor: pointer;"
                    onclick="window.location.href='{{ route('all-coins-products') }}';">
                    <img src="packaging.png" alt="Icon 2"
                        style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-top: 10px;">
                    <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px;">  استبدل بمنتج</p>
                </div>
            </div>


               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('exchangeCoins').onclick = function () {
            Swal.fire({
                title: 'أدخل عدد العملات',
                html: `
                    <form id="coinsForm" method="POST" action="{{ route('coinsToBalance') }}" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="text" name="coins" placeholder="عدد العملات" value="" style="margin-bottom: 10px; padding: 10px; border: 2px solid #4CAF50; border-radius: 8px; width: 250px;" />
                        <input type="submit" value="تأكيد" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 8px; cursor: pointer;" />
                    </form>
                `,
                icon: 'question',
                showConfirmButton: false,
                showCancelButton: false,
                // cancelButtonText: 'إلغاء',
                cancelButtonColor: '#d33',
                background: '#f0f0f0',
                customClass: {
                    title: 'custom-title',
                    content: 'custom-content',
                    cancelButton: 'custom-cancel-button'
                }
            });

            document.getElementById('coinsForm').onsubmit = function (e) {
                e.preventDefault();
                var coins = document.querySelector('input[name="coins"]').value;
                if (!coins || isNaN(coins) || coins <= 0) {
                    Swal.fire({
                        title: 'خطأ',
                        text: 'يرجى إدخال عدد صحيح من العملات',
                        icon: 'error',
                        confirmButtonText: 'حسناً'
                    });
                } else {
                    this.submit();
                }
            };
        }
    </script>
    <style>
        .custom-title {
            font-family: 'Tajawal', sans-serif;
            color: #333;
            font-size: 1.5em;
        }
        .custom-content {
            font-family: 'Tajawal', sans-serif;
            color: #555;
            font-size: 1.2em;
        }
        .custom-cancel-button {
            font-family: 'Tajawal', sans-serif;
            font-size: 1em;
        }
        form {
            direction: rtl;
        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }
        .action-button {
            text-align: center;
            background-color: #fff5e8;
            width: 140px;
            height: 140px;
            border-radius: 25px;
            box-shadow: 0 0 15px 0 rgb(228, 225, 225);
            cursor: pointer;
        }
        .action-button img {
            display: block;
            margin: 0 auto;
            width: 60px;
            height: 60px;
            margin-top: 15px;
        }
        .action-button p {
            font-family: 'Tajawal', sans-serif;
            margin-bottom: 15px;
            font-size: 1.1em;
        }
    </style>




</body>

</html>