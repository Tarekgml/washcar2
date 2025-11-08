@if(auth()->check() && auth()->user()->role == 'company')
<script>
  window.location.href = '/orders-home'
</script>
@endif

  
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords"
        content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>wash carrent  | الرئيسية</title>
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
   @include('includes.header')
    <!-- <section style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 97vh;"> -->

        <h2 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 20px; color: rgb(0, 0, 0); font-weight: bold; margin-bottom: 20px;">
           الأقسام
        </h2>

        <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
            <div style="text-align: center; background-color: #0097db; width: 150px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225); cursor: pointer;"
                onclick="window.location.href='{{ route('allCompany') }}';">
                <img src="car.png" alt="Icon 1"
                    style="display: block; margin: 0 auto; width: 80px; height: auto; margin-top: 10px;">
                <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px; color: white;"> غسيل السيارات</p>
            </div>
            <div style="text-align: center; background-color: #0097db; width: 150px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225) ; cursor: pointer;"
                onclick="window.location.href='{{ route('all-rental') }}';">
                <img src="automotive.png" alt="Icon 2"
                    style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-top: 10px;">
                <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px; color: white;"> ايجار سيارات الغسيل </p>
            </div>
        </div>


        <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
            <div style="text-align: center; background-color: #0097db; width: 150px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225); cursor: pointer;"
                onclick="window.location.href='{{ route('all-Accessories') }}'">
                <img src="drive.png" alt="Icon 1"
                    style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-top: 10px;">
                <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px; color: white;"> اكسسوارات </p>
            </div>
            <div style="text-align: center; background-color: #0097db; width: 150px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225); cursor: pointer;"
                onclick="window.location.href='{{ route('all-products') }}';">
                <img src="prod.png" alt="Icon 2"
                    style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-top: 10px;">
                <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px; color: white;">  المنتجات</p>
            </div>
        </div>
        <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
            <div style="text-align: center; background-color: #0097db; width: 150px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225); cursor: pointer;"
                onclick="window.location.href='/all-sell';">
                <img src="sell.png" alt="Icon 2"
                    style="display: block; margin: 0 auto; width: 50px; height: 50px; margin-top: 10px;">
                <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px; color: white;">  بيع سيارات الغسيل </p>
            </div>
            <div style="text-align: center; background-color: #0097db; width: 150px; height: 120px; border-radius: 20px; box-shadow: 0 0 10px 0 rgb(228, 225, 225); cursor: pointer;"
                onclick="window.location.href='{{route('all-clean')}}'">
                <img src="bottle.png" alt="Icon 1"
                    style="display: block; margin: 0 auto; width: 50px;  margin-top: 10px;">
                <p style="font-family: 'Tajawal', sans-serif; margin-bottom: 10px; color: white;"> مواد التنظيف </p>
            </div>
        </div>
    </section>



</body>

</html>