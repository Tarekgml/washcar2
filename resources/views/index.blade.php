@if(auth()->check() && auth()->user()->role == 'company')
<script>
  window.location.href = '/orders-home'
</script>
@endif


@php
$companies = App\Models\User::where('role','company')->where('price', '!=' ,0)->where('trend', true)->get();
@endphp
<!DOCTYPE html>
<html style="font-size: 16px; overflow-x: hidden;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>wash carrent  | الرئيسية</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <meta name="generator" content="wash car">
  <link rel="icon" href="/includes/images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Audiowide&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=El+Messiri:wght@400..700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
  <link rel="stylesheet" href="includes/css/Home.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">

  <style>
    body {
      overflow-x: hidden;
    }
  </style>

  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      padding: 10px;
      width: 100%;
      max-width: 1200px;
      box-sizing: border-box;
      font-family: Tajawal;
    }

    .card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 5px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-sizing: border-box;
      flex: 1 1 calc(50% - 20px);
      /* العرض الافتراضي للبطاقات */
      max-width: calc(50% - 20px);
      /* العرض الأقصى للبطاقات */
      font-family: 'Tajawal', sans-serif;
      /* تأكد من تضمين الخط */
      position: relative;
      /* لإضافة التأثيرات */
      overflow: hidden;
      /* لإخفاء الأجزاء الزائدة */
      z-index: 1;
      /* لتحديد مستوى الز-index */
    }

    .card::before {
      content: '';
      position: absolute;
      width: 100px;
      background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(0, 183, 255));
      height: 130%;
      animation: rotBGimg 10s linear infinite;
      transition: all 1.2s linear;
      z-index: -1;
      /* لتحديد مستوى الز-index أسفل المحتوى */
    }

    @keyframes rotBGimg {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .card::after {
      content: '';
      position: absolute;
      background: white;
      inset: 5px;
      border-radius: 15px;
      z-index: -1;
      /* لتحديد مستوى الز-index أسفل المحتوى */
    }


    .profile-img {
      width: 100%;
      height: 200px;
      border-radius: 12;
      object-fit: cover;
      margin-bottom: 10px;
      /* border: 2px solid #00b7ff; */


    }

    .user-info {
      margin-bottom: 10px;
      font-family: Tajawal !important;
      width: auto;
      font-size: 14px;
    }

    .status {
      color: green;
      margin-bottom: 10px;
      font-family: Tajawal;
    }

    .icons {
      display: flex;
      justify-content: space-around;
      width: 100%;
      margin-bottom: 10px;
    }

    .icons i {
      cursor: pointer;
      font-size: 24px;
      color: #DB075E;
    }

    @media (max-width: 600px) {
      .card {
        flex: 1 1 calc(50% - 10px);
        /* 50% من العرض */
        max-width: calc(50% - 10px);
        /* 50% من العرض */
      }
    }

    @media (min-width: 601px) and (max-width: 900px) {
      .card {
        flex: 1 1 calc(33.33% - 20px);
        max-width: calc(33.33% - 20px);
      }
    }

    @media (min-width: 901px) {
      .card {
        flex: 1 1 calc(25% - 20px);
        max-width: calc(25% - 20px);
      }
    }




    .tabs {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
      margin-top: 20px;
      font-family: Tajawal;
    }

    .tab-button {
      background-color: #006eb8;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      transition: background-color 0.3s;
      border-radius: 12px;
      font-size: 14px;
    }

    .tab-button.active {
      background-color: #0044ff;
    }

    .tab-button:not(:last-child) {
      margin-right: 10px;
    }

    .tab-content {
      display: none;
      border-radius: 5px;
      font-family: Tajawal;
    }

    .tab-content.active {
      display: block;
    }
  </style>


  <style>
    /* Style the image */
    .img1 {
      cursor: pointer;
      width: 150px;
      /* Thumbnail size */
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      z-index: 9999;
      padding-top: 60px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.8);
      /* Black background with opacity */
    }

    /* Modal Content (the image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Add Animation */
    .modal-content {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes zoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* The Close Button */
    .close {
      position: absolute;
      top: 20px;
      right: 35px;
      color: white;
      font-size: 40px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
  </style>





  <style>
    .container01 {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      padding: 10px;
      width: 100%;
      max-width: 1200px;
      box-sizing: border-box;
      font-family: Tajawal;
    }

    .card01 {
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 5px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-sizing: border-box;
      flex: 1 1 calc(50% - 20px);
      /* العرض الافتراضي للبطاقات */
      max-width: calc(50% - 20px);
      /* العرض الأقصى للبطاقات */
      font-family: 'Tajawal', sans-serif;
      /* تأكد من تضمين الخط */
      position: relative;
      /* لإضافة التأثيرات */
      overflow: hidden;
      /* لإخفاء الأجزاء الزائدة */
      z-index: 1;
      /* لتحديد مستوى الز-index */
    }

    .card01::before {
      content: '';
      position: absolute;
      width: 100px;
      background-image: linear-gradient(180deg, rgb(255, 102, 0), rgb(89, 255, 48));
      height: 130%;
      animation: rotBGimg 10s linear infinite;
      transition: all 1.2s linear;
      z-index: -1;
      /* لتحديد مستوى الز-index أسفل المحتوى */
    }

    @keyframes rotBGimg {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .card01::after {
      content: '';
      position: absolute;
      background: white;
      inset: 5px;
      border-radius: 15px;
      z-index: -1;
      /* لتحديد مستوى الز-index أسفل المحتوى */
    }


    .profile-img01 {
      width: 100%;
      height: 150px;
      border-radius: 12px;
      object-fit: cover;
      margin-bottom: 10px;
      /* border: 2px solid #00b7ff; */


    }

    .user-info01 {
      margin-bottom: 10px;
      font-family: Tajawal !important;
      width: auto;
      font-size: 14px;
    }

    .status01 {
      color: green;
      margin-bottom: 10px;
      font-family: Tajawal;
    }


    @media (max-width: 600px) {
      .card {
        flex: 1 1 calc(50% - 10px);
        /* 50% من العرض */
        max-width: calc(50% - 10px);
        /* 50% من العرض */
      }
    }

    @media (min-width: 601px) and (max-width: 900px) {
      .card {
        flex: 1 1 calc(33.33% - 20px);
        max-width: calc(33.33% - 20px);
      }
    }

    @media (min-width: 901px) {
      .card {
        flex: 1 1 calc(25% - 20px);
        max-width: calc(25% - 20px);
      }
    }
  </style>






</head>

<body class="u-body u-xl-mode" data-lang="en">
  @include('includes.header')
  @include('includes.fixedbar')



    <!--قسم البحث-->
    <div class="search-container">
        <div class="search-icon">
          <img src="scanner.png" alt="Camera Icon" class="icon" onclick="window.location.href='https://qr.washcarrent.com/'">
        </div>
        <form method="GET" class="search-form" action="{{ route('search') }}" style="display: inline;">
          <input type="text" name="search" class="search-input" placeholder="أبحث  "
            style="font-family: 'Tajawal', sans-serif;">
        </form>
        <div class="search-icon">
          <img src="search.png" alt="Search Icon" class="icon">
        </div>
      </div>
    
<!--------------------------------------------------------------------------------->
<div class="categories-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; padding: 10px; margin: 10px auto; max-width: 1000px;">
  
  <div class="category-item" style="display: flex; flex-direction: column; align-items: center; width: calc(33.33% - 10px); cursor: pointer;">
    <div class="icon-circle" style="width: 60px; height: 60px; background: linear-gradient(135deg,  #01BAEF, #0190C0); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin-bottom: 8px; box-shadow: 0 4px 15px rgba(255,107,107,0.3); transition: transform 0.3s ease;">
      <li class="fa-solid fa-car" style="color: white; font-size: 24px;"></li>
    </div>
    <span style="font-family: 'Tajawal', sans-serif; font-size: 14px; text-align: center; font-weight: 600; color: #444;">ايجار السيارات</span>
  </div>

  <div class="category-item" style="display: flex; flex-direction: column; align-items: center; width: calc(33.33% - 10px); cursor: pointer;">
    <div class="icon-circle" style="width: 60px; height: 60px; background: linear-gradient(135deg,  #01BAEF, #0190C0); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin-bottom: 8px; box-shadow: 0 4px 15px rgba(78,205,196,0.3); transition: transform 0.3s ease;">
      <li class="fa-solid fa-spray-can-sparkles" style="color: white; font-size: 24px;"></li>
    </div>
    <span style="font-family: 'Tajawal', sans-serif; font-size: 14px; text-align: center; font-weight: 600; color: #444;">غسيل السيارات</span>
  </div>

  <div class="category-item" style="display: flex; flex-direction: column; align-items: center; width: calc(33.33% - 10px); cursor: pointer;">
    <div class="icon-circle" style="width: 60px; height: 60px; background: linear-gradient(135deg,  #01BAEF, #0190C0); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin-bottom: 8px; box-shadow: 0 4px 15px rgba(161,127,224,0.3); transition: transform 0.3s ease;">
      <li class="fa-solid fa-box" style="color: white; font-size: 24px;"></li>
    </div>
    <span style="font-family: 'Tajawal', sans-serif; font-size: 14px; text-align: center; font-weight: 600; color: #444;">المنتجات</span>
  </div>

  <div class="category-item" style="display: flex; flex-direction: column; align-items: center; width: calc(33.33% - 10px); cursor: pointer;">
    <div class="icon-circle" style="width: 60px; height: 60px; background: linear-gradient(135deg,  #01BAEF, #0190C0); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin-bottom: 8px; box-shadow: 0 4px 15px rgba(255,113,206,0.3); transition: transform 0.3s ease;">
      <li class="fa-solid fa-box-open" style="color: white; font-size: 24px;"></li>
    </div>
    <span style="font-family: 'Tajawal', sans-serif; font-size: 14px; text-align: center; font-weight: 600; color: #444;">الاكسسوارات</span>
  </div>

  <div class="category-item" style="display: flex; flex-direction: column; align-items: center; width: calc(33.33% - 10px); cursor: pointer;">
    <div class="icon-circle" style="width: 60px; height: 60px; background: linear-gradient(135deg,  #01BAEF, #0190C0); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin-bottom: 8px; box-shadow: 0 4px 15px rgba(1,186,239,0.3); transition: transform 0.3s ease;">
      <li class="fa-solid fa-soap" style="color: white; font-size: 24px;"></li>
    </div>
    <span style="font-family: 'Tajawal', sans-serif; font-size: 14px; text-align: center; font-weight: 600; color: #444;">مواد التنظيف</span>
  </div>

  <div class="category-item" style="display: flex; flex-direction: column; align-items: center; width: calc(33.33% - 10px); cursor: pointer;">
    <div class="icon-circle" style="width: 60px; height: 60px; background: linear-gradient(135deg, #01BAEF, #0190C0); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin-bottom: 8px; box-shadow: 0 4px 15px rgba(255,179,71,0.3); transition: transform 0.3s ease;">
      <li class="fa-solid fa-car-side" style="color: white; font-size: 24px;"></li>
    </div>
    <span style="font-family: 'Tajawal', sans-serif; font-size: 14px; text-align: center; font-weight: 600; color: #444;">بيع السيارات</span>
  </div>

</div>


<!--------------------------------------------------------------------------------->




  <!--قسم الاعلانات العلوي-->
  <!-- Swiper -->
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="false" space-between="30"
    centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">

    @foreach (\App\Models\Website::first()->images as $key => $media)
    <swiper-slide>
      @php
      // Determine the file type based on its extension
      $extension = pathinfo($media['image'], PATHINFO_EXTENSION);
      @endphp

      @if(in_array(strtolower($extension), ['mp4', 'webm', 'ogg']))
      <!-- If it's a video, use the video tag -->
      <video controls style="width: 100%; height: 100%;">
        <source src="/storage/{{ $media['image'] }}" type="video/{{ $extension }}">
        Your browser does not support the video tag.
      </video>
      @else
      <!-- If it's an image, use the img tag -->
      <img class="img1" id="img{{ $key }}" src="/storage/{{ $media['image'] }}" alt="Media content"
        onclick="openFullscreen(this)" />
      @endif

      <!-- Modal for the image -->
      <div id="modal{{ $key }}" class="modal">
        <span class="close" data-modal-id="modal{{ $key }}">&times;</span>
        <img class="modal-content" id="modalImage{{ $key }}">
      </div>
    </swiper-slide>
    @endforeach
  </swiper-container>




  <div id="fullscreen-overlay"
    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.9); z-index: 9999;">
    <div style="position: relative; width: 100%; height: 100%;">
      <img id="fullscreen-image" src="" alt="Fullscreen image"
        style="max-width: 90%; max-height: 90%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" />
      <!--<img src="/includes/images/logo.png" alt="Website Logo" style="position: absolute; top: 20px; left: 20px; width: 50px; height: 50px; z-index: 10000;" />-->
      <button onclick="closeFullscreen()"
        style="position: absolute; top: 20px; right: 20px; background-color: white; border: none; font-size: 20px; cursor: pointer;">X</button>
    </div>
  </div>

  <script>
    function openFullscreen(img) {
      document.getElementById('fullscreen-image').src = img.src;
      document.getElementById('fullscreen-overlay').style.display = 'block';
    }
    function closeFullscreen() {
      document.getElementById('fullscreen-overlay').style.display = 'none';
    }
  </script>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>




  <!-------------------------------------------------->
  <!-- Encouraging words section -->
  <div class="encouragement-section" style="text-align: center; padding: 20px 0; background-color: #f8f9fa;">
    <h3 style="font-family: 'Tajawal', sans-serif; color: #333; margin-bottom: 15px;"> السيارة النظيفة تبدأ من هنا
    </h3>
    <p style="font-family: 'Tajawal', sans-serif; color: #666; margin-bottom: 20px;">

      تطبيقنا يقدم لك خدمات غسيل
      السيارات بأعلى جودة وفي أي وقت
      ومكان. انضم إلينا ودعنا نهتم بنظافة سيارتك لتبقى دائمًا متألقة


    </p>
  </div>

  <!-- Icons section -->
  <div class="icons-section" style="display: flex; justify-content: center; align-items: center; padding: 20px 0;">
    <div class="icon-item" style="text-align: center; margin: 0 15px;">
      <img src="medal.png" alt="جودة عالية" style="width: 50px; height: 50px;">
      <p style="font-family: 'Tajawal', sans-serif; margin-top: 10px; font-size: 14px;">جودة عالية</p>
    </div>
    <div class="icon-item" style="text-align: center; margin: 0 15px;">
      <img src="quick.png" alt="خدمة سريعة" style="width: 50px; height: 50px;">
      <p style="font-family: 'Tajawal', sans-serif; margin-top: 10px;font-size: 14px;">خدمة سريعة</p>
    </div>
    <div class="icon-item" style="text-align: center; margin: 0 15px;">
      <img src="customer-service.png" alt="دعم العملاء" style="width: 50px; height: 50px;">
      <p style="font-family: 'Tajawal', sans-serif; margin-top: 10px;font-size: 14px;">دعم العملاء</p>
    </div>
    <div class="icon-item" style="text-align: center; margin: 0 15px;">
      <img src="price-tag.png" alt="أسعار مناسبة" style="width: 50px; height: 50px;">
      <p style="font-family: 'Tajawal', sans-serif; margin-top: 10px;font-size: 14px;">أسعار مناسبة</p>
    </div>
  </div>

  <!-------------------------------------------------->




  <!--------- تاجير ------------>

  <h4 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 25px;">تأجير سيارات الغسيل </h4>
  @php
  $cars = App\Models\Car::all();
  @endphp
  @if($cars->isEmpty())
  <center>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
      background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
    <h5 style="font-family: Almarai; text-align: center;">لا توجد سيارات متاحة </h5>
  </center>
  @else


  <swiper-container class="swiper-container12" effect="cards" grab-cursor="true" autoplay-delay="2500"
    autoplay-disable-on-interaction="false">
    @foreach ($cars as $car)
    @php
    $images = $car->imgs;
    $firstImage = $images[0];
    @endphp
    <swiper-slide class="swiper-slide12" onclick="window.location.href='{{ route('car-details', $car->id) }}';"
      style="display: flex; flex-direction: column; align-items: center; height: 250px; cursor: pointer;">
      <img src="/storage/{{ $firstImage }}" alt="{{ $car->name }}" width="100px" height="100px"
        style="border-radius: 50%; margin-bottom: 5px; border: 1px solid #000; animation: glow 1.5s infinite;">
      <style>
        @keyframes glow {
          0% {
            box-shadow: 0 0 5px #e4e4e4;
          }

          50% {
            box-shadow: 0 0 20px #1b89d3;
          }

          100% {
            box-shadow: 0 0 5px #74cdf7;
          }
        }
      </style>
      <h4 style="margin-bottom: 15px; color: #000; font-size: 20px; font-family: Almarai;">{{ $car->name }}</h4>
      <p style="margin-bottom: 15px; color: #000; font-size: 18px; font-family: Almarai;">{{ $car->price }} K.D /
        يوم</p>
      @if($car->status == true)
      <p
        style="color: green; font-size: 16px; font-family: Almarai; text-align: center; background-color: rgba(255, 255, 255, 0);">
        متاحة الان</p>
      @else
      <p
        style="color: red; font-size: 16px; font-family: Almarai; text-align: center; background-color: rgba(255, 255, 255, 0);">
        غير متاحة الان</p>
      @endif
    </swiper-slide>
    @endforeach
    @endif
  </swiper-container>



  <!-- قسم شركات الغسيل   -->

  <!-- <h4 class="mb-3" style="font-family: Almarai; text-align: center;">أبرز شركات الغسيل</h4>
        @if($companies->isEmpty())
        <center>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                type="module"></script>

            <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
                background="transparent" speed="1" style="width: 150px; height: 150px;" loop
                autoplay></dotlottie-player>
            <h5 style="font-family: Almarai; text-align: center;">لا توجد شركات متاحة </h5>
        </center>
        @else


        <swiper-container class="swiper-container12" effect="cards" grab-cursor="true" autoplay-delay="2500"
            autoplay-disable-on-interaction="false">
            @foreach ($companies as $company)
            <swiper-slide class="swiper-slide12"
                onclick="window.location.href='{{ route('company-account', $company->id) }}';"
                style="display: flex; flex-direction: column; align-items: center; height: 250px; cursor: pointer;">

                <img src="/storage/{{ $company->profile_img }}" alt="{{ $company->name }}" width="100px" height="100px"
                    style="border-radius: 50%; margin-bottom: 5px; border: 1px solid #000; animation: glow 1.5s infinite;">
                <style>
                    @keyframes glow {
                        0% {
                            box-shadow: 0 0 5px #e4e4e4;
                        }

                        50% {
                            box-shadow: 0 0 20px #1b89d3;
                        }

                        100% {
                            box-shadow: 0 0 5px #74cdf7;
                        }
                    }
                </style>
                <h4 style="margin-bottom: 15px; color: #000; font-size: 20px; font-family: Almarai;"> {{
                    $company->name }}</h4>
                <p style="margin-bottom: 15px; color: #000; font-size: 18px; font-family: Almarai;">السعر: {{
                    $company->price +
                    ($company->price *
                    \App\Models\Website::first()->ratio/100)}} د.ك</p>
                <p
                    style="color: green; font-size: 16px; font-family: Almarai; text-align: center; background-color: rgba(255, 255, 255, 0);">
                    متاح الان</p>
            </swiper-slide>
            @endforeach
            @endif
        </swiper-container> -->


  <h4 class="mb-3" style="font-family: Almarai; text-align: center;">أبرز شركات الغسيل</h4>
  @if($companies->isEmpty())
  <center>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
      background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
    <h5 style="font-family: Almarai; text-align: center;">لا توجد شركات متاحة </h5>
  </center>
  @else


  <!------------------------------------------------------------------------>
  <swiper-container class="swiper-container-custom" pagination="true" pagination-clickable="true" space-between="30"
    slides-per-view="3" style="margin-bottom: 30px;">
    @foreach ($companies as $company)
    <swiper-slide class="swiper-slide-custom"
      onclick="window.location.href='{{ route('company-account', $company->id) }}';">
      <img src="/storage/{{ $company->profile_img }}" alt="{{ $company->name }}">
      <h4 style="margin-bottom: 15px; color: #000; font-size: 15px; font-family: Almarai;">{{ $company->name }}</h4>
    </swiper-slide>
    @endforeach
  </swiper-container>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <style>
    .swiper-container-custom {
      width: 100%;
      height: auto;
      background-color: transparent;
      margin: 10px;
    }

    .swiper-slide-custom {
      text-align: center;
      font-size: 18px;
      background: transparent;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      padding: 15px;
    }

    .swiper-slide-custom img {
      display: block;
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }
  </style>
  <!------------------------------------------------------------------------>





  <!--قسم الاعلانات السفلي-->
  <!-- Swiper -->
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="false" space-between="30"
    centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false"
    style="background-color: #f8f9fa;">

    @foreach (\App\Models\Website::first()->BottomImages as $media)
    <swiper-slide>
      @php
      // Determine the file type based on its extension
      $extension = pathinfo($media['image'], PATHINFO_EXTENSION);
      @endphp
      @if(in_array(strtolower($extension), ['mp4', 'webm', 'ogg'])) <!-- Adjust these extensions as needed -->
      <!-- If it's a video, use the video tag -->
      <video class="img1" controls>
        <source src="/storage/{{ $media['image'] }}" type="video/{{ $extension }}">
        Your browser does not support the video tag.
      </video>
      @else
      <!-- If it's an image, use the img tag -->

      <img class="img1" src="/storage/{{ $media['image'] }}" alt="Media content"
        style="height: 150px; border-radius: 12px;" />
      @endif
    </swiper-slide>
    @endforeach

  </swiper-container>















  <!-- بيع السيارات  -->
  <!---------------------------------------------------------------------------------------------------->
  <h4 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 25px;">بيع سيارات الغسيل </h4>
  @php
  $cars = App\Models\SellCar::all();
  @endphp
  @if($cars->isEmpty())
  <center>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
      background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
    <h5 style="font-family: Almarai; text-align: center;">لا توجد منتجات متاحة </h5>
  </center>
  @else



  <style>
    .swiper-container-sell {
      width: 100%;
      height: 250px;
    }

    .swiper-slide-sell {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      font-size: 16px;
      font-weight: bold;
      color: #000;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      padding: 10px;
      width: 220px;
      height: 220px;
    }

    .swiper-slide-sell img {
      display: block;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .swiper-slide-sell h3 {
      font-size: 16px;
      font-weight: 700;
      margin: 5px 0;
      text-align: center;
    }

    .swiper-slide-sell p {
      margin: 5px 0;
      font-size: 14px;
      text-align: center;
    }
  </style>

  <!---------------------------------------------------------------------------------------------------->
  <swiper-container class="swiper-container-sell" pagination="true" pagination-clickable="true" slides-per-view="3"
    space-between="30" free-mode="true">
    @foreach ($cars as $car)
    @php
    $images = $car->imgs;
    $firstImage = $images[0];
    @endphp
    <swiper-slide class="swiper-slide-sell" style="cursor: pointer;"
      onclick="window.location.href='{{ route('carSell-details', $car->id) }}';">
      <img src="/storage/{{ $firstImage }}" alt="{{ $car->name }}">
      <h3>{{ $car->name }}</h3>
      <p>
        السعر: {{ $car->price }}
      </p>
    </swiper-slide>
    @endforeach
    @endif
  </swiper-container>
  <!---------------------------------------------------------------------------------------------------->





  <!---------نقاط المكافئات------------>
  <div class="container mt-4" style="display: flex; justify-content: center;">

    <div style="text-align: center;">
      <h4 class="mb-3" style="font-family: Almarai;"> نقاط المكافئات</h4>
      <div style="display: flex; justify-content: center;">
        <div class="rating">
          <input value="5" name="rate" id="star5" type="radio">
          <label title="text" for="star5"></label>
          <input value="4" name="rate" id="star4" type="radio">
          <label title="text" for="star4"></label>
          <input value="3" name="rate" id="star3" type="radio" checked="">
          <label title="text" for="star3"></label>
          <input value="2" name="rate" id="star2" type="radio">
          <label title="text" for="star2"></label>
          <input value="1" name="rate" id="star1" type="radio">
          <label title="text" for="star1"></label>
        </div>
      </div>
    </div>
  </div>

  @if(!auth()->check())
  <!-- Join Section -->
  <div class="container mt-4" style="display: flex; justify-content: center;">
    <div class="join-section" style="text-align: center;">

      <h4 style="font-family: Almarai;">إنضم الآن!</h4>
      <p style="font-family: Almarai;">قم بالدخول إلى تطبيقنا ليرسل لك كل عروضنا
        وخدماتنا الجديدة</p>
      <button class="btn btn-light" style="font-family: Almarai;" onclick="showSweetAlert()">سجل الآن</button>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        function showSweetAlert() {
          Swal.fire({
            title: 'اختر نوع التسجيل',
            showDenyButton: true,
            confirmButtonText: 'شريك',
            denyButtonText: `مستفيد`,
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = '{{ route('company-signup') }}';
            } else if (result.isDenied) {
              window.location.href = '{{ route('signup') }}';
            }
          })
        }
      </script>
    </div>
  </div>
  @endif










  <div class="tabs">
    <button class="tab-button active " data-tab="tab3">مواد التنظيف</button>
    <button class="tab-button" data-tab="tab2"> اكسسوارات</button>
    <button class="tab-button " data-tab="tab1">منتجات</button>
  </div>


  <!--============================================المنتجات================================================-->
  <div class="tab-content" id="tab1">

    <!-- <h4 class="mb-3" style="font-family: Almarai;"> المنتجات</h4> -->

    @php
    $products = App\Models\Product::where('type', 'product')->take(10)->get();
    $totalProducts = App\Models\Product::where('type', 'product')->count();
    @endphp
    @if($products->isEmpty())
    <center>
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></script>

      <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
        background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
      <h5 style="font-family: Almarai; text-align: center;">لا توجد منتجات متاحة </h5>
    </center>
    @else
    <div class="container">
      @foreach ($products as $product)
      @php
      $images = $product->image;
      $firstImage = $images[0];
      @endphp
      <div class="card" style="cursor: pointer;"
        onclick="window.location.href='{{ route('Product-details',$product->id) }}';">
        <img src="/storage/{{ $firstImage }}" alt="{{ $product->name }}" class="profile-img">

        <div class="user-info">
          <h3 style="font-size: 14px;margin-bottom:1px; font-weight: 800;"> {{ $product->name }}</h3>
          <p style="margin-bottom:-5px"> {{ $product->price }} د.ك</p>
        </div>
        <div class="status" style="color:green; margin-top:-5px">
          متوفر
        </div>
      </div>
      @endforeach
      @if($totalProducts > 10)
      <div style="text-align: center; margin-top: 20px;">
        <button class="btn btn-primary" onclick="window.location.href='{{ route('all-products') }}';">عرض المزيد</button>
      </div>
      @endif
    </div>
    @endif
    </div>
    <center>
      <!-- <a href="{{ route('all-products') }}" class="btn btn-primary">عرض المزيد</a> -->
    </center>
    <br>


    <!-- إضافة المزيد من البطاقات حسب الحاجة -->
  </div>
  <!--===================================================================================================-->



  <!--============================================الاكسسوارات================================================-->
  <div class="tab-content" id="tab2">

    <!-- <h4 class="mb-3" style="font-family: Almarai;"> الإكسسوارات</h4> -->

    @php
    $acc = App\Models\Product::where('type', 'acc')->take(10)->get();
    $totalAcc = App\Models\Product::where('type', 'acc')->count();
    @endphp
    @if($acc->isEmpty())
    <center>
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
        type="module"></script>

      <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
        background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
      <h5 style="font-family: Almarai; text-align: center;">لا توجد إكساسوارات متاحة </h5>
    </center>
    @else
    <div class="container">
      @foreach ($acc as $product)
      @php
      $images = $product->image;
      $firstImage = $images[0];
      @endphp
      <!-------------------------------------------------------------------->
      <div class="card" style=" cursor: pointer;"
        onclick="window.location.href='{{ route('Product-details',$product->id) }}';">

        <img src="/storage/{{ $firstImage }}" alt="{{ $product->name }}" class="profile-img">

        <div class="user-info">
          <h3 style="font-size: 14px; margin-bottom:0px; font-weight: 800;"> {{ $product->name }}</h3>
          <p style="margin-bottom:-5px"> {{ $product->price }} د.ك</p>
        </div>
        <div class="status" style="color:green; margin-top:-5px">
          متوفر
        </div>
      </div>
      <!-------------------------------------------------------------------->
      @endforeach
      @if($totalAcc > 10)
      <div style="text-align: center; margin-top: 20px;">
        <button class="btn btn-primary" onclick="window.location.href='{{ route('all-products') }}';">عرض المزيد</button>
      </div>
      @endif
    </div>
    @endif
  </div>
  <center>
    <!-- <a href="{{ route('all-products') }}" class="btn btn-primary">عرض المزيد</a> -->
  </center>
  <br>

  <!-- إضافة المزيد من البطاقات حسب الحاجة -->
  </div>
  <!--===================================================================================================-->




    <!--==============================================منتجات التنظيف=====================================================-->
    <div class=" tab-content active" id="tab3">

          <!-- <h4 class="mb-3" style="font-family: Almarai;"> منتجات تنظيف</h4> -->

          @php
          $clean = App\Models\Product::where('type', 'clean')->get();
          @endphp
          @if($clean->isEmpty())
          <center>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
              type="module"></script>

            <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
              background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
            <h5 style="font-family: Almarai; text-align: center;">لا توجد منتجات نظافة متاحة </h5>
          </center>
          @else
          <div class="container">
            @foreach ($clean as $product)
            @php
            $images = $product->image;
            $firstImage = $images[0];
            @endphp
            <!-------------------------------------------------------------------->
            <div class="card" style=" cursor: pointer;"
              onclick="window.location.href='{{ route('Product-details',$product->id) }}';">

              <img src="/storage/{{ $firstImage }}" alt="{{ $product->name }}" class="profile-img">

              <div class="user-info">
                <h3 style="font-size: 14px; margin-bottom:0px;font-weight: 800;"> {{ $product->name }}</h3>
                <p style="margin-bottom:-5px"> {{ $product->price }} د.ك</p>
              </div>
              <div class="status" style="color:green;margin-top:-5px">
                متوفر
              </div>
            </div>
            <!-------------------------------------------------------------------->

            @endforeach
            @endif
          </div>
          <center>
            <!-- <a href="{{ route('all-products') }}" class="btn btn-primary">عرض المزيد</a> -->
          </center>
          <br>


          <!-- إضافة المزيد من البطاقات حسب الحاجة -->
        </div>
        <!--===================================================================================================-->



        <!--===================================================================================================-->
        <div class="social-icons" style="text-align: center;">
          <a href="https://www.facebook.com/share/9KMbdKUKyZ7hKPCv/?mibextid=WC7FNe" target="_blank"
            style="margin: 0 10px; color: inherit; text-decoration: none;">
            <img src="facebook.png" alt="Facebook" style="width: 30px; height: 30px;">
          </a>
          <a href="https://www.tiktok.com/@abdallateef_7?_t=8qHg3mDnoXv&_r=1" target="_blank"
            style="margin: 0 10px; color: inherit; text-decoration: none;">
            <img src="tik.png" alt="Twitter" style="width: 30px; height: 30px;">
          </a>
          <a href="https://www.instagram.com/wash_car_rent?igsh=dDZudTBpaDEzMjYw&utm_source=qr" target="_blank"
            style="margin: 0 10px; color: inherit; text-decoration: none;">
            <img src="social.png" alt="Instagram" style="width: 30px; height: 30px;">
          </a>
          <a href="https://youtube.com/@washcarrent?si=kU-jKAMchRfm9QBi" target="_blank"
            style="margin: 0 10px; color: inherit; text-decoration: none;">
            <img src="youtube.png" alt="LinkedIn" style="width: 30px; height: 30px;">
          </a>
          <a href="https://snapchat.com/t/5JIKSyCC" target="_blank"
            style="margin: 0 10px; color: inherit; text-decoration: none;">
            <img src="snapchat.png" alt="Snapchat" style="width: 30px; height: 30px;">
          </a>
        </div>
        <!--===================================================================================================-->




        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





        <!------------------------------------------------------------------------------------->
        <br><br><br><br>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>



        <script>
          // script.js
          // document.getElementById('toggle-sidebar').addEventListener('click', function () {
          //     document.getElementById('sidebar').classList.toggle('active');
          //     document.getElementById('overlay').classList.toggle('active');
          // });

          document.getElementById('overlay').addEventListener('click', function () {
            document.getElementById('sidebar').classList.remove('active');
            document.getElementById('overlay').classList.remove('active');
          });
        </script>




        <script type='module'>



          document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
              const tabNumber = button.getAttribute('data-tab');

              document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
              document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

              button.classList.add('active');
              document.getElementById(tabNumber).classList.add('active');
            });
          });

          const searchInput = document.querySelector('input[type="text"]');
          searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase();
            document.querySelectorAll('.card').forEach(card => {
              const userName = card.querySelector('h3').textContent.toLowerCase();
              const userUuid = card.getAttribute('uuid').toLowerCase();
              if (userName.includes(query) || userUuid.includes(query)) {
                card.style.display = 'flex';
              } else {
                card.style.display = 'none';
              }
            });
          });
        </script>








</body>


</html>