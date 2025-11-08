<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>إعلاناني</title>
  <link rel="stylesheet" href="../includes/css/style.css" media="screen">
  <link rel="stylesheet" href="../includes/Corporate-Account/css/my-ads.css" media="screen">
  <script class="u-script" type="text/javascript" src="../includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="../includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "wash car kw"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="my-ads">
  <meta property="og:description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
  <style>
.button {
  padding: 15px 20px;
  border: none;
  outline: none;
  background-color: #151515;
  color: #eee;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.25s ease-out;
  font-size: 16px;
  font-family: Almarai;
}

.button:hover {
  transform: translateY(-3px);
}

.button-span {
  color: #aaa;
  font-size: 16px;
  font-family: Almarai;
}

 
  </style>
</head>

<body class="u-body u-xl-mode" data-lang="en">
  @include('company-account.includes.fixedbar')

  <section class="u-clearfix u-section-1" id="sec-0717">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h3 class="u-align-center u-custom-font u-text u-text-1" style="direction: rtl; margin-top: 20px;"> سجل اعلاناتك</h3>
    </div>
  </section>
  @php
  $ads = App\Models\Ad::where('user_id', auth()->user()->id)->get();
  @endphp
  @if ($ads->isEmpty())

  <center>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
    <h5 style="font-family: Almarai; text-align: center;">لا يوجد سجل اعلانات</h5>
    <br><br>
    <button class="button">
  اعلان جديد 
  <span class="button-span"> ─ غير مجاني</span>
</button>





  </center>

  @else
  @foreach ($ads as $ad)
  <section class="u-clearfix u-section-3" id="sec-6e36">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">

      <a href="{{ route('company-ads-data', $ad->id) }}" class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-radius-6 u-btn-1">
        {{ $ad->title }}
      </a>
    </div>
  </section>
  @endforeach
  @endif

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</body>

</html>