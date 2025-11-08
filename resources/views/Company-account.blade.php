<!DOCTYPE html>
@php
  $company = App\Models\User::find($id);
@endphp
<html lang="ar-KW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>{{ $company->name }}</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

  <!-- Original meta tags and schema -->
  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "wash car kw"
  }</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Company-account">
  <meta property="og:description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">

  <style>
    body {
      font-family: 'Almarai', sans-serif;
      background-color: #f8f9fa;
    }

    .profile-section {
      padding: 2rem 0;
      text-align: center;
    }

    .profile-image {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      border: 3px solid #0d6efd;
      animation: glow 1.5s infinite;
    }

    @keyframes glow {
      0% { box-shadow: 0 0 5px rgba(13, 110, 253, 0.2); }
      50% { box-shadow: 0 0 20px rgba(13, 110, 253, 0.8); }
      100% { box-shadow: 0 0 5px rgba(13, 110, 253, 0.2); }
    }

    .container2 {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      text-align: right;
    }

    .form-group select,
    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      direction: rtl;
    }

    .delete-btn {
      background-color: #ff4444;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .delete-btn:hover {
      background-color: #cc0000;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .card {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .preview-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      cursor: pointer;
    }
  </style>
</head>

<body>
  @include('includes.fixedbar')

  <section class="profile-section">
    <img class="profile-image" src="/storage/{{ $company->profile_img }}" alt="{{ $company->name }}">
    <h1 class="mt-3">{{ $company->name }}</h1>
    <h6 class="text-success">الحالة: {{ auth()->user()->status ? 'مشغول' : 'متاح' }}</h6>
    
    @if(\App\Models\Appointment::where('company_id', $company->id)->get()->count() > 0)
      <h6 class="text-primary">
        الميعاد التالي: {{ \App\Models\Appointment::where('company_id', $company->id)->get()->last()->time ? 
          $newTime = tap(\App\Models\Appointment::where('company_id', $company->id)->get()->last(), function($appointment) {
            $appointment->time = preg_replace_callback('/(\d+)(\D+)/', function($matches) {
              return ($matches[1] + 1) . $matches[2];
            }, $appointment->time);
          })->time : 'متاح' }}
      </h6>
    @else
      <h6 class="text-primary">متاح للحجز الان</h6>
    @endif
  </section>

  @php
    use \App\Models\Rate;
    $company_id = $company->id;
    $averageRating = Rate::where('company_id', $company_id)->avg('rate');
    $totalRatings = Rate::where('company_id', $company_id)->count();
  @endphp

  <div class="text-center mb-4">
    <h6>التقييم <span>{{ $averageRating }}</span> ⭐</h6>
    <a href="{{ route('rev', $company->id) }}" class="text-decoration-none">عرض جميع التقييمات</a>
  </div>

  <div class="container2">
    <form action="{{ route('appointment', $company->id) }}" method="post">
      @csrf
      <div class="form-group">
        <label for="car">اختر نوع المركبة:</label>
        <select id="car" name="car_type">
          <option value="sedan">صالون</option>
          <option value="medium_suv">جيب او وانيت متوسط</option>
          <option value="large_suv">جيب او وانيت كبير</option>
          <option value="motorcycle">دراجة نارية</option>
          <option value="closed_pickup">بكس مقفل</option>
          <option value="caravan">كرفان</option>
        </select>
      </div>

      <div class="form-group">
        <label for="wash">اختر نوع الغسيل:</label>
        <select id="wash" name="wash">
          <option value="normal">عادي</option>
          <option value="pro">برو</option>
          <option value="vip">في أي بي</option>
          <option value="vvip">في في أي بي</option>
        </select>
      </div>

      <div class="form-group">
        @php
          $days = ['sunday' => 'الأحد', 'monday' => 'الاثنين', 'tuesday' => 'الثلاثاء', 'wednesday' => 'الأربعاء', 'thursday' => 'الخميس', 'friday' => 'الجمعة', 'saturday' => 'السبت'];
          $appointments = \App\Models\Appointment::where('company_id', $company->id)->whereNotIn('status', ['مرفوض', 'مكتمل'])->get();
          $availableDays = ['tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
        @endphp

        <label for="days">اختر يوم:</label>
        <select id="days" name="day" onchange="updateTimes()">
          <option selected value="">اختر اليوم</option>
          @foreach($days as $day => $dayLabel)
            @if(in_array($day, $availableDays))
              <option value="{{ $day }}" data-available="yes">{{ $dayLabel }}</option>
            @else
              <option value="{{ $day }}" data-available="no" style="display:none;">{{ $dayLabel }}</option>
            @endif
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="hours">اختر ساعة:</label>
        <select id="hours" name="time">
          <!-- Options will be populated by JavaScript -->
        </select>
      </div>

      <div class="form-group">
        <label for="notes">ملاحظات (اختياري)</label>
        <input type="text" id="notes" name="notes" placeholder="أدخل رسالتك....">
      </div>

      <button type="submit" class="btn btn-primary w-100">حجز</button>
    </form>
  </div>

  <div class="text-center mt-4">
    <h6>المنشورات</h6>
  </div>

  @php
    $posts = App\Models\Post::where('user_id', $id)->get();
  @endphp

  @if ($posts->isEmpty())
    <div class="text-center">
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
      <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
      <h5>لم تقم الشركة بنشر اي منشورات حاليا</h5>
    </div>
  @else
    <div class="container">
      @foreach ($posts as $post)
        <div class="card">
          @php
            $extension = pathinfo($post->img, PATHINFO_EXTENSION);
            $isVideo = in_array(strtolower($extension), ['mp4', 'webm', 'ogg']);
          @endphp
          
          @if($isVideo)
            <video controls class="preview-image" onclick="openFullscreen(this)">
              <source src="/storage/{{ $post->img }}" type="video/{{ $extension }}">
              Your browser does not support the video tag.
            </video>
          @else
            <img src="/storage/{{ $post->img }}" alt="شركة حي للغسيل" class="preview-image" onclick="openFullscreen(this)">
          @endif

          @if(auth()->id() == $post->user_id)
            <div class="p-3">
              <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn w-100" onclick="return confirm('هل أنت متأكد من حذف هذا المنشور؟')">
                  حذف المنشور
                </button>
              </form>
            </div>
          @endif
        </div>
      @endforeach
    </div>
  @endif

  <div id="fullscreen-overlay" class="position-fixed top-0 start-0 w-100 h-100 d-none">
    <div class="position-relative w-100 h-100">
      <img id="fullscreen-image" src="" alt="Fullscreen image" class="position-absolute top-50 start-50 translate-middle" style="max-width: 90%; max-height: 90%;">
      <button onclick="closeFullscreen()" class="position-absolute top-3 end-3 btn btn-danger rounded-circle">✕</button>
    </div>
  </div>


<div style="height: 100px;"></div>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function openFullscreen(img) {
      document.getElementById('fullscreen-image').src = img.src;
      document.getElementById('fullscreen-overlay').classList.remove('d-none');
    }
    
    function closeFullscreen() {
      document.getElementById('fullscreen-overlay').classList.add('d-none');
    }

    function updateTimes() {
      const selectedDay = document.getElementById('days').value;
      const hoursSelect = document.getElementById('hours');
      hoursSelect.innerHTML = '';

      if (!selectedDay) return;

      const appointments = @json($appointments);
      const bookedTimes = appointments
        .filter(appointment => appointment.day === selectedDay)
        .map(appointment => appointment.time);

      for (let hour = 13; hour <= 20; hour++) {
        let hour12 = hour % 12 || 12;
        let period = hour < 12 ? 'ص' : 'م';
        let timeOption = `${hour12} ${period}`;
        let timeValue = `${hour12}${period}`;

        if (!bookedTimes.includes(timeValue)) {
          hoursSelect.innerHTML += `<option value="${timeValue}">${timeOption}</option>`;
        }
      }
    }
  </script>

  <!-- IziToast for offers -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
  
  <script>
    @php
      $offer = \App\Models\Offer::where('company_id', $company->id)->where('gift','!=', 0)->get()->last();
    @endphp
    @if(isset($offer))
      iziToast.show({
        message: 'قم بالغسيل {{ $offer->quantity }} غسلات وأحصل علي  {{ $offer->gift }} مجانا',
        color: 'green',
        position: 'topRight',
        timeout: 5000,
        rtl: true,
        class: 'izitoast-custom'
      });
    @endif
  </script>

  <style>
    .izitoast-custom {
      border-radius: 25px !important;
      font-family: 'Almarai', sans-serif !important;
      font-size: 16px !important;
      margin-top: 10px !important;
    }
  </style>
</body>
</html>