<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords"
        content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>wash carrent | تأجير  سيارة</title>
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
         
          font-family: Tajawal !important;
          width: auto;
          font-size: 14px;
      }

      .status {
          color: green;
          
          font-family: Tajawal;
      }

      .icons {
          display: flex;
          justify-content: space-around;
          width: 100%;
       
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


</head>

<body>
     @include('includes.fixedbar')
       @include('includes.header')

    <section>

        <h2 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 10px; color: rgb(73, 73, 73);">
            مواد التنظيف

        </h2>
        <!----------------------------------------------->
        <div class="search-container">
    <div class="search-icon">
        <!--<img src="scanner.png" alt="Camera Icon" class="icon" onclick="window.location.href='https://qr.khidmah24.com/'">-->
    </div>
    <form method="GET" class="search-form" style="display: inline;">
        <input type="text" name="query" class="search-input" placeholder=" ابحث  " style="font-family: 'Tajawal', sans-serif;" value="{{ request('query') }}">
    </form>
    <div class="search-icon">
        <img src="search.png" alt="Search Icon" class="icon">
    </div>
</div>

@php
    $query = request('query');
    $companies = App\Models\Product
        ::where('price', '!=', 0)
        ->where('type', 'clean')
        ->when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', '%' . $query . '%');
        })
        ->get();
@endphp

@if($companies->isNotEmpty())
    <div class="container">
        @foreach($companies as $company)
            <div class="card" style="cursor: pointer;" onclick="window.location.href='{{ route('Product-details', $company->id) }}';">
                <img src="/storage/{{ $company->image[0] }}" alt="{{ $company->name }}" class="profile-img">
                <div class="user-info" style="margin-top: -10px;">
                    <h3 style="font-size: 14px; font-family: Tajawal; margin-bottom: -15px;font-weight: 800;">{{ $company->name }}</h3>
                    <p style="font-family: Tajawal; margin-bottom:2px;">{{ $company->price }} د.ك</p>
                </div>
                <div class="status" style="color:green;margin-top:-1px">
                    متوفر
                </div>
            </div>
        @endforeach
    </div>
@else
    <center>
        <p>لا توجد نتائج مطابقة لبحثك.</p>
    </center>
@endif
      
      
      
      
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