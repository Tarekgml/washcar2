<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>سجل السحب</title>

  <meta name="generator" content="wash car">
  <link rel="icon" href="../includes/images/favicon.png">
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
  <meta property="og:title" content="Withdrawal history">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
 @include('company-account.includes.fixedbar')

  @php
  $withdrawals = App\Models\Withdraw::where('user_id', auth()->user()->id)->get();
  @endphp

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Almarai', sans-serif;
      background-color: #f5f5f5;
      color: #333;
      /*direction: rtl;*/
    }

    .transaction-container {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      width: 100%;
      max-width: 600px;
      margin: 20px auto;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .transaction-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .transaction-header h2 {
      font-size: 1.2rem;
      color: #333;
    }

    .transaction-header .see-all {
      color: #1dbf73;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .transaction-list {
      display: flex;
      flex-direction: column;
    }

    .transaction-item {
      background-color: #f9f9f9;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s ease;
    }

    .transaction-item:hover {
      background-color: #f0f0f0;
    }

    .transaction-item .time {
      font-size: 0.9rem;
      color: #888;
    }

    .transaction-item .description {
      font-size: 1rem;
      font-weight: 500;
      flex-grow: 1;
      text-align: center;
      color: #333;
    }

    .transaction-item .amount {
      font-size: 1rem;
      color: #1dbf73;
      font-weight: bold;
    }
  </style>
  <div class="transaction-container">
    <div class="transaction-header">
      <h2>المعاملات الأخيرة</h2>
      <a href="#" class="see-all"> المبلغ</a>
    </div>
    <div class="transaction-list">
      @if ($withdrawals->isEmpty())
        <div class="transaction-item">
          <span class="description">لا توجد سجلات</span>
        </div>
      @else
        @foreach ($withdrawals as $withdrawal)
          <div class="transaction-item">
            <span class="time">{{$withdrawal->created_at}}</span>
@php
    $statusTranslations = [
        'pending' => 'معلق',
        'approved' => 'مقبول',
        'rejected' => 'مرفوض',
        // Add more statuses here
    ];

    $translatedStatus = $statusTranslations[$withdrawal->status] ?? $withdrawal->status; // Fallback to original if no translation found
@endphp

<span class="description">{{ $translatedStatus }}</span>            <span class="amount">{{$withdrawal->amount}} د.ك</span>
          </div>
        @endforeach
      @endif
    </div>
  </div>

  @if ($withdrawals->isEmpty())
    <center>
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
      <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
      <h5 style="font-family: Almarai; text-align: center; color: #000;">لا توجد سجلات</h5>
    </center>
  @endif

</body>

</html>