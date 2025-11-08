<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>المحفظة</title>
  <link rel="stylesheet" href="includes/css/style.css" media="screen">
  <link rel="stylesheet" href="includes/css/wallet.css" media="screen">
  <script class="u-script" type="text/javascript" src="includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="includes/images/favicon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="wallet">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Rubik', sans-serif;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .profile-card {
      background-color: white;
      border-radius: 20px;
      padding: 20px;
      width: 350px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      font-family: 'Rubik', sans-serif;
    }

    .profile-header {
      position: relative;
      font-family: 'Rubik', sans-serif;
    }

    .back-button {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 24px;
      cursor: pointer;
      font-family: 'Rubik', sans-serif;
    }

    .profile-picture {
      width: 100px;
      height: 100px;
      margin: 0 auto;
      overflow: hidden;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-details h2 {
      font-size: 1.5rem;
      margin-bottom: 5px;
      font-family: 'Rubik', sans-serif;
    }

    .profile-details p {
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 15px;
      font-family: 'Rubik', sans-serif;
    }

    .social-links a {
      margin: 0 10px;
      font-size: 1.5rem;
      text-decoration: none;
      color: #333;
      font-family: 'Rubik', sans-serif;
    }

    .stats {
      display: flex;
      justify-content: space-between;
      margin: 20px 0;
      font-family: 'Rubik', sans-serif;
    }

    .stats div h3 {
      font-size: 1.2rem;
      font-family: 'Rubik', sans-serif;
    }

    .stats div p {
      font-size: 0.8rem;
      color: #007bff;
      font-family: 'Rubik', sans-serif;
    }

    .actions {
      display: flex;
      justify-content: space-around;
      font-family: 'Rubik', sans-serif;
    }

    .message-btn,
    .follow-btn {
      width: 45%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      cursor: pointer;
      font-family: 'Rubik', sans-serif;
    }

    .message-btn {
      background-color: white;
      color: #333;
      border: 2px solid #333;
    }

    .follow-btn {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>

<body class="u-body u-xl-mode" data-lang="ar">
@include('includes.fixedbar')
<!---------------------------------------------------------------->

<!---------------------------------------------------------------->  
  <div class="profile-card">
    <div class="profile-header">
      <!-- <span class="back-button">←</span> -->
      <div class="profile-picture">
        <img src="/storage/{{ auth()->user()->profile_img }}" alt="Profile Picture">
      </div>
    </div>
    <div class="profile-details">
      <h2> {{ auth()->user()->name }}</h2>
      <p style="margin:30px;">{{ auth()->user()->balance }} د.ك<p>
    </div>
  

    <div class="actions">
      <button class="follow-btn" onclick="window.location.href='{{ route('recharge') }}'"> شحن الرصيد </button>
    </div>
  </div>



</body>

</html>