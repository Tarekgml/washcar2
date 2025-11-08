<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>تعديل الملف الشخصي</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../includes/css/styleass.css">

  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <meta name="generator" content="wash car">
  <link rel="icon" href="includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "wash car kw"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="done">
  <meta property="og:description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
  <style>
    label.custom-file-upload {
      display: inline-block;
      padding: 10px 20px;
      cursor: pointer;
      background-color: black;
      color: white;
      border-radius: 8px;
      transition: background-color 0.3s ease;
      width: 100%;
      direction: rtl;
      font-family: Rubik;
    }

    label.custom-file-upload:hover {
      background-color: black;
    }

    .input[type="file"] {
      display: none;
    }
  </style>
</head>

<body>

  <section class="container forms">
    <div class="form login">
      <div class="form-content">

        <!-- <center>
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/b6d0f62c-a0df-4a90-a7f8-dd2b2deabf8d/ZguAISRDmz.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                </center> -->

        <center>
          <img src="{{ asset('storage/' . auth()->user()->profile_img) }}" alt="صورة الملف الشخصي" width="100px" height="100px" style="border-radius: 50%; animation: glow 1s infinite;">
          <style>
            @keyframes glow {
              0% {
                box-shadow: 0 0 5px #478ac9;
              }
              50% {
                box-shadow: 0 0 20px #478ac9;
              }
              100% {
                box-shadow: 0 0 5px #478ac9;
              }
            }
          </style>
        </center>
        <header style="font-family: Rubik; font-size: large;"> تعديل الملف الشخصي</header>


        <form enctype="multipart/form-data" action="{{ route('company-profile.update') }}" method="post">
          @csrf
          @method('POST')
          <div class="field input-field">
            <input value="{{ auth()->user()->name }}" name="name" type="text" placeholder="أدخل اسمك " class="input" style="font-family: Rubik; direction:rtl;">

          </div>
          <div class="field input-field">
            <input value="{{ auth()->user()->phone }}" name="phone" type="text" placeholder="أدخل رقم جوالك" class="input" style="font-family: Rubik; direction:rtl;">

          </div>
          <div class="field input-field">
            <input value="{{ auth()->user()->address }}" name="address" type="text" placeholder="ادخل العنوان" class="input" style="font-family: Rubik; direction:rtl;">

          </div>
          <div class="field input-field">
            <input value="{{ auth()->user()->price }}" name="price" type="text" placeholder="ادخل سعر الحجز " class="input" style="font-family: Rubik; direction:rtl;">

          </div>
          <div class="field input-field">
            <input value="{{ auth()->user()->email }}" name="email" type="email" placeholder="أدخل البريد الالكتروني" class="input" style="font-family: Rubik; direction:rtl;">
          </div>



            <input type="hidden" value="{{ auth()->user()->status }}" name="status" >


          <div class="field input-field">
            <label for="file-upload" class="custom-file-upload">أضغط لتعديل صورة الشركة</label>
            <input name="profile_img" type="file" id="file-upload" class="input">
          </div>
          <div class="field input-field">
            <input name="password" type="password" placeholder="كلمة السر " class="password" style="font-family: Rubik; direction:rtl;">

          </div>


          <!-- <div class="field input-field">
            <div class="form-group">
              <select name="status" id="status" class="input" style="font-family: Rubik; direction:rtl; padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%; height: 50px;">
                <option selected disabled style="font-family: Rubik; direction:rtl;">تغيير الحالة</option>
                <option {{ auth()->user()->status ? 'selected' : '' }} value="1" style="font-family: Rubik; direction:rtl;">مفعل</option>
                <option {{ auth()->user()->status ? '' : 'selected' }} value="0" style="font-family: Rubik; direction:rtl;">مشغول</option>
              </select>
            </div>
          </div> -->




          


          <div class="field button-field">
            <button style="font-family: Rubik;">حفظ البيانات</button>
          </div>


        </form>

        <br><br><br><br><br><br><br><br><br>




        <!-- JavaScript -->
        <script src="script.js"></script>
</body>

</html>