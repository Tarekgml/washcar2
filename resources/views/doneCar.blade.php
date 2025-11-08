<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>عملية ناجحة</title>
  <link rel="stylesheet" href="/includes/css/style.css" media="screen">
  <link rel="stylesheet" href="/includes/css/done.css" media="screen">
  <script class="u-script" type="text/javascript" src="/includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="/includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="/includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="done">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    @include('includes.fixedbar')
  <section class="u-clearfix u-section-1" id="sec-dc61">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-clearfix u-custom-html u-custom-html-1">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
          type="module"></script>
        <dotlottie-player src="https://lottie.host/eb9ea287-ee34-4e50-bd35-8cab1edcd2b9/Vpr1AKTORy.json"
          background="transparent" speed="1" style="width: 300px; height: 300px;" loop=""
          autoplay=""></dotlottie-player>
      </div>
      <h6 class="u-align-center u-custom-font u-text u-text-1" style="direction: rtl;">رقم الطلب الخاص بسيارتك
        </h6>
      <h6 class="u-align-center u-custom-font u-text u-text-2">{{ \App\Models\CarRental::find($id)->uuid }}</h6>
        <h6 class="u-align-center u-custom-font u-text u-text-2">{{ \App\Models\Car::find(\App\Models\CarRental::find($id)->car_id)->link }}</h6>
      <a href="javascript:void(0);"
        class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-font u-grey-90 u-radius-6 u-btn-1"
        onclick="showQRCode()">عرض رمز الاستجابة خاصتك</a>
      <a href="{{ route('history') }}"
        class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-font u-grey-90 u-radius-6 u-btn-1"
     > عــــــرض حالة الطـــــلــــب  </a>
    </div>
  </section>

  <script>
    function showQRCode() {
      Swal.fire({
        // title: 'رمز الاستجابة الخاص بك',
        imageUrl: 'https://qrcode.tec-it.com/API/QRCode?data=({{ $id }})',
        imageWidth: 250,
        imageHeight: 250,
        imageAlt: 'QR Code',
        confirmButtonText: 'تأكيد',
        customClass: {
          popup: 'rounded-popup',
          confirmButton: 'custom-confirm-button'
        }
      });
    }
  </script>
  <style>
    .rounded-popup {
      border-radius: 25px;
      font-family: 'Cairo', sans-serif;
    }
    .custom-confirm-button {
      background-color: #478ac9;
      color: white;
      font-family: 'Cairo', sans-serif;
      font-size: 16px;
      border-radius: 10px;
      margin-top: 10px !important;
    }
  </style>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>