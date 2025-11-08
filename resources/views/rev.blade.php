<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title> التقييمات</title>
  <link rel="stylesheet" href="/includes/css/style.css" media="screen">
  <link rel="stylesheet" href="/includes/css/rev.css" media="screen">
  <script class="u-script" type="text/javascript" src="/includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="/includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="/includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800|Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Cairo:200,300,400,500,600,700,800,900">



  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="orders">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  @include('includes.fixedbar')
  <section class="u-clearfix u-section-1" id="sec-2ade">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h3 class="u-align-center u-custom-font u-text u-text-1" style="margin-top: 20px;"> التقييمات</h3>
    </div>
  </section>
  @php
  $rates = \App\Models\Rate::where('company_id',$id)->get();
  @endphp
  @if($rates->isEmpty())
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
<center>
  <dotlottie-player src="https://lottie.host/74bcabe7-47c1-4fd6-ac7a-67f2ddc1a97c/wZDU9gXIta.json"
    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
</center>
  <h1 style="text-align: center; font-size: 20px; margin-top: 20px; font-family: 'Cairo', sans-serif;">لا توجد تقييمات
  </h1>
  @else
  @foreach($rates as $rate)
  <section class="u-clearfix u-section-2" id="sec-8ba6">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-border-1 u-border-grey-40 u-container-style u-group u-radius-10 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <img class="u-align-right u-border-2 u-border-custom-color-1 u-image u-image-circle lazyload u-image-1" alt=""
            data-image-width="928" data-image-height="1280"
            data-src="/storage/{{ \App\Models\User::find($rate->user_id)->profile_img }}">
          <h5 class="u-align-center u-custom-font u-text u-text-1" style="direction: rtl;">{{
            \App\Models\User::find($rate->user_id)->name }}</h5>

          </h5>
          <h5 class="u-align-center u-custom-font u-text u-text-3" style="direction: rtl;">{{ $rate->comment }}</h5>
          <h5 class="u-align-center u-custom-font u-text u-text-3" style="direction: rtl;">
            @for($i = 1; $i <= $rate->stars; $i++)
              ⭐
            @endfor
          </h5>
                    <h5 class="u-align-center u-custom-font u-text u-text-3" style="direction: rtl;">{{ $rate->comment }}</h5>

          <h5 class="u-align-center u-custom-font u-text u-text-3" style="direction: rtl;">{{ $rate->created_at }}</h5>

        </div>
      </div>
    </div>
  </section>
  @endforeach
  @endif



  <br><br><br><br>


</body>

</html>