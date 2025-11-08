
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">
@php
  $product = App\Models\SellCar::find($id);
@endphp
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>{{ $product->name }}</title>
  <link rel="stylesheet" href="/includes/css/style.css" media="screen">
  <link rel="stylesheet" href="/includes/css/Product-details.css" media="screen">
  <script class="u-script" type="text/javascript" src="/includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="/includes/js/main.js" defer=""></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="/includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Product-details">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">

</head>


<body class="u-body u-xl-mode" data-lang="ar">
  @include('includes.fixedbar')

  <style>
    .product-container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      font-family: 'Almarai', sans-serif;
      direction: rtl;
    }

    .product-image {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .product-title {
      font-size: 24px;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
      font-family: 'Almarai', sans-serif;
    }

    .product-rating {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .star {
      color: #ffc107;
      font-size: 18px;
    }

    .rating-value {
      margin-left: 5px;
      font-weight: 600;
    }

    .rating-count {
      color: #666;
      margin-left: 10px;
    }

    .product-description {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }

    .product-options {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .option {
      background-color: #f0f0f0;
      border-radius: 20px;
      padding: 5px 15px;
      font-size: 14px;
      font-weight: 600;
    }

    .product-price {
      font-size: 28px;
      font-weight: 700;
      color: #007a33;
      margin-bottom: 20px;
    }

    .add-to-cart {
      background-color: #007a33;
      color: #fff;
      border: none;
      border-radius: 25px;
      padding: 12px 20px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    .add-to-cart:hover {
      background-color: #00a048;
    }

    @media (max-width: 480px) {
      .product-container {
        padding: 15px;
      }

      .product-title {
        font-size: 20px;
      }

      .product-price {
        font-size: 24px;
      }

      .add-to-cart {
        font-size: 16px;
        padding: 10px 15px;
      }
    }


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
    }

    swiper-slide img {
      display: block;
      width: 100%;
      border-radius: 25px;
    }
  </style>


<style>

  #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
      opacity: 0; /* بدايةً، تكون الطبقة غير مرئية */

      animation: fadeIn 1s ease;

  }
  #overlay.show {
      display: flex;
      opacity: 1; /* مرئية عند إضافة الفئة */
  }
  #message {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
</style>
  <div class="product-container">
    <!-- images-->

  
    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
      @foreach($product->imgs as $img)
    <swiper-slide>
      <img src="/storage/{{ $img }}"onclick="openFullscreen(this)"  />
    </swiper-slide>
    @endforeach
  </swiper-container>
  <div id="fullscreen-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.9); z-index: 9999;">
  <div style="position: relative; width: 100%; height: 100%;">
      <img id="fullscreen-image" src="" alt="Fullscreen image" style="max-width: 90%; max-height: 90%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" />
      <!--<img src="/includes/images/logo.png" alt="Website Logo" style="position: absolute; top: 20px; left: 20px; width: 50px; height: 50px; z-index: 10000;" />-->
      <button onclick="closeFullscreen()" style="position: absolute; top: 20px; right: 20px; background-color: white; border: none; font-size: 20px; cursor: pointer;">X</button>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>






    <!-- title-->
    <h1 class="product-title">{{ $product->name }}</h1>
    <!-- rating-->
    <!--<div class="product-rating">-->
    <!--  <span class="star">★★★★★</span>-->
    <!--  <span class="rating-value">4.8</span>-->
    <!--  <span class="rating-count">(117 تقييم)</span>-->
    <!--</div>-->
    <p class="product-description"
    >{{ $product->description }}
    </p>
    <!-- <div class="product-options">
  <span class="option">الموديل</span>
  <span class="option">اللون</span>
  <span class="option">الحجم</span>
</div> -->
    <p class="product-price">{{ $product->price }} د.ك</p>
    <div style="display: flex; justify-content: space-between; gap: 10px;">
      <a href="{{ $product->link }}" class="add-to-cart" target="_blank" style="text-align: center;flex: 1; background-color: #0894dc; text-decoration: none;"> واتساب</a>
      <a href="tel:+96551525911" class="add-to-cart" style="text-align: center;flex: 1; background-color: #0894dc; text-decoration: none;"> الاتصال</a>

    </div>
  </div>
  <!-- message -->
  <div id="overlay">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/3fb5717a-8862-4f3f-aff3-eed775a692f7/hH98CAHVWr.json"
      background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
  </div>

  
  <script>
    document.getElementById('showMessageBtn').onclick = function() {
        const overlay = document.getElementById('overlay');
        overlay.classList.add('show');
        setTimeout(() => {
            overlay.classList.remove('show');
        }, 2000); // بدء إخفاء الرسالة بعد 3 ثوانٍ
    };
  </script>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function redirect() {
            Swal.fire({
                title: 'هل تريد تأكيد طلب البيع',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'نعم',
                cancelButtonText: 'لا'
                }).then((result) => {
                  if (result.isConfirmed) {
                    var form = document.createElement('form');
                    form.method = 'post';
                    form.action = '/carSellRental/' + {{ $product->id }};
                    form.style.display = 'none';
                    var csrfToken = document.createElement('input');
                    csrfToken.setAttribute('type', 'hidden');
                    csrfToken.setAttribute('name', '_token');
                    csrfToken.setAttribute('value', '{{ csrf_token() }}');
                    form.appendChild(csrfToken);
                    document.body.appendChild(form);
                    form.submit();
                  }
                });
        }
    </script>
    
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'تم التسجيل بنجاح!',
            text: '{{ session('success') }}',
            confirmButtonText: 'حسناً',
            customClass: {
                title: 'swal-title',
                htmlContainer: 'swal-html-container',
                confirmButton: 'swal-confirm-button'
            }
        });
    </script>
    @endif

    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: '{!! implode('<br>', $errors->all()) !!}',
            confirmButtonText: 'حسناً',
            customClass: {
                title: 'swal-title',
                htmlContainer: 'swal-html-container',
                confirmButton: 'swal-confirm-button'
            }
        });
    </script>
@endif


</body>

</html>