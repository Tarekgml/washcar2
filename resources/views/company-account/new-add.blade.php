<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>  اضافة اعلان جديد</title>
  <link rel="stylesheet" href="../includes/css/style.css" media="screen">
  <link rel="stylesheet" href="../includes/css/recharge.css" media="screen">
  
  <meta name="generator" content="wash car">
  <link rel="icon" href="includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="recharge">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">

</head>

<body class="u-body u-xl-mode" data-lang="en">
    @include('company-account.includes.fixedbar')

  <section class="container forms">
    <div class="form login">
      <div class="form-content">

        <center>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<dotlottie-player src="https://lottie.host/34fe4a6a-4692-483b-90a3-a50c325dd50e/hNvVie9CGo.json" background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
        </center>

        <header style="font-family: Almarai; font-size: 16px;">  اضافة اعلان جديد</header>
        <form action="{{ route('company-new-add.post') }}" method='POST' enctype="multipart/form-data">
          @csrf
          <div class="field input-field">
            <input name='title' type="text" placeholder="عنوان الاعلان" class="input" required style="font-family: Almarai; direction: rtl;">
          </div>
          <div class="field input-field" style="margin-top: 20px;">
            <input type="file" class="inputmethod" name="img" required>
          </div>

          <div class="field input-field">
            <textarea name='description' placeholder=" نص الاعلان" class="input" required style="font-family: Almarai; direction: rtl; width: 100%; border-radius: 7px;height: 100px; margin-bottom: 20px; padding: 10px;"></textarea>
          </div>
          <br><br>
         

          <div class="field button-field">
            <button type="submit" style="font-family: Almarai;"> ارسال للمراجعة وخصم {{ App\Models\Website::first()->add_price }} د.ك </button>
          </div>
        </form>

      </div>

  </section>
@if(auth()->user()->balance < \App\Models\Website::first()->add_price)
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
Swal.fire({
  title: 'لا يوجد لديك رصيد كافي يرجى التواصل مع الإدارة',
  icon: 'info',
  confirmButtonText: 'موافق',
  customClass: {
    popup: 'swal2-round-border',
    title: 'swal2-title-font',
    confirmButton: 'swal2-confirm-button'
  },
  allowOutsideClick: false
}).then(() => {
    window.location.href = '/'
})
</script>

<style>
  .swal2-round-border {
    border-radius: 25px;
  }
  .swal2-title-font {
    font-family: 'Almarai', sans-serif;
    font-size: 20px !important;
  }
  .swal2-confirm-button {
    background-color: #478ac9;
    color: white;
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    font-family: 'Almarai', sans-serif;
    width: 150px;
  }
  .swal2-confirm-button:hover {
    background-color: #357ab8;
  }
</style>
@endif


</body>

</html>