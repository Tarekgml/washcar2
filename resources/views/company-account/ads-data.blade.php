<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>إعلاناني</title>
  <link rel="stylesheet" href="../includes/css/style.css" media="screen">
  <link rel="stylesheet" href="../includes/Corporate-Account/css/my-ads.css" media="screen">
  <script class="u-script" type="text/javascript" src="../includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="../includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>



  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="my-ads">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
  <style>
    swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      margin-bottom: 50px;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      border-radius: 15px;

    }
  </style>
</head>
@php
$ad = App\Models\Ad::find($id);
@endphp
<body class="u-body u-xl-mode" data-lang="en">
@include('includes.fixedbar')  
  <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
    <swiper-slide>
      <img src="/storage/{{ $ad->img }}" />
    </swiper-slide>

  </swiper-container>

  <section class="u-clearfix u-section-1" id="sec-0717">
    <div class="u-clearfix u-sheet u-sheet-1"> 
      <h3 class="u-align-center u-custom-font u-text u-text-1" style="direction: rtl;">{{ $ad->title }}</h3>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-6158">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-align-right u-custom-font u-text u-text-1" style="direction: rtl;"> 
        
       {{ $ad->description }}
      
      </p>
    </div>
  </section>
  <section class="u-clearfix u-section-3" id="sec-6e36">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-radius-6 u-btn-1">
        {{ $ad->status }} </a>
      <a href=""
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-radius-6 u-btn-1">عرض
        الاعلان</a>
    </div>
  </section>




</body>

</html>