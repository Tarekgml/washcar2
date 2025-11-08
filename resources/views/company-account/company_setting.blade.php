<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>تعديل الملف الشخصي</title>

  <!-- CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <meta name="generator" content="wash car">
  <link rel="icon" href="includes/images/favicon.png">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Cairo', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #0056b3 0%, #00296b 100%);
      padding: 20px;
    }

    .container {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px;
      width: 100%;
      max-width: 450px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      direction: rtl;
      animation: fadeIn 1s ease;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #0056b3;
      font-weight: 700;
      font-size: 28px;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group label {
      display: block;
      font-size: 16px;
      margin-bottom: 8px;
      color: #333;
      font-weight: 500;
    }

    .form-group input,
    .form-select {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #e1e1e1;
      border-radius: 12px;
      font-size: 15px;
      transition: all 0.3s ease;
      background-color: #fff;
    }

    .form-group input:focus,
    .form-select:focus {
      border-color: #0056b3;
      box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.15);
      outline: none;
    }

    .form-select {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M10.293 3.293L6 7.586 1.707 3.293A1 1 0 00.293 4.707l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: left 15px center;
      padding-left: 40px;
    }

    .register-btn {
      width: 100%;
      padding: 14px;
      background: linear-gradient(45deg, #0056b3, #007bff);
      color: #fff;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-size: 18px;
      font-weight: 600;
      transition: all 0.3s ease;
      margin-top: 10px;
    }

    .register-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 86, 179, 0.3);
    }

    .logo-img {
      width: 180px;
      margin: 0 auto 30px;
      display: block;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
      100% {
        transform: scale(1);
      }
    }

    /* Custom styling for time inputs */
    input[type="time"] {
      font-family: 'Cairo', sans-serif;
      color: #333;
    }

    /* Responsive Design */
    @media (max-width: 480px) {
      .container {
        padding: 20px;
      }

      .container h2 {
        font-size: 24px;
      }

      .form-group label {
        font-size: 14px;
      }

      .form-group input,
      .form-select {
        padding: 10px 12px;
        font-size: 14px;
      }

      .register-btn {
        padding: 12px;
        font-size: 16px;
      }
    }
  </style>

</head>

<body>
  <div class="container">
    <img src="{{ asset('includes/images/logo.png') }}" alt="logo" class="logo-img">
    <h2>تعديل اعدادات الشركة</h2>

    <form enctype="multipart/form-data" action="{{ route('company-profile.update') }}" method="post">
      @csrf
      @method('POST')
  
      <input value="{{ auth()->user()->name }}" name="name" type="hidden">
      <input value="{{ auth()->user()->email }}" name="email" type="hidden">
      <input value="{{ auth()->user()->address }}" name="address" type="hidden">
      <input value="{{ auth()->user()->phone }}" name="phone" type="hidden">

      <div class="form-group">
        <label for="price">سعر حجز الغسيل</label>
        <input value="{{ auth()->user()->price }}" name="price" type="number" placeholder="ادخل سعر الحجز">
      </div>

      <div class="form-group">
        <label for="status">حالة الشركة</label>
        <select name="status" id="status" class="form-select">
          <option value="1" {{ auth()->user()->status == 1 ? 'selected' : '' }}>مفعل</option>
          <option value="0" {{ auth()->user()->status == 0 ? 'selected' : '' }}>مشغول</option>
        </select>
      </div>

      @php
        $availableDay = \App\Models\AvailableDay::where('company_id', auth()->user()->id)->first();
        $availableHour = \App\Models\AvailableHour::where('company_id', auth()->user()->id)->first();
      @endphp

      <div class="form-group">
        <label for="DaysFrom">يوم البداية</label>
        <select name="DaysFrom" id="DaysFrom" class="form-select">
          <option value="الأحد" {{ isset($availableDay) && $availableDay->from == 'الأحد' ? 'selected' : '' }}>الأحد</option>
          <option value="الاثنين" {{ isset($availableDay) && $availableDay->from == 'الاثنين' ? 'selected' : '' }}>الاثنين</option>
          <option value="الثلاثاء" {{ isset($availableDay) && $availableDay->from == 'الثلاثاء' ? 'selected' : '' }}>الثلاثاء</option>
          <option value="الأربعاء" {{ isset($availableDay) && $availableDay->from == 'الأربعاء' ? 'selected' : '' }}>الأربعاء</option>
          <option value="الخميس" {{ isset($availableDay) && $availableDay->from == 'الخميس' ? 'selected' : '' }}>الخميس</option>
          <option value="الجمعة" {{ isset($availableDay) && $availableDay->from == 'الجمعة' ? 'selected' : '' }}>الجمعة</option>
          <option value="السبت" {{ isset($availableDay) && $availableDay->from == 'السبت' ? 'selected' : '' }}>السبت</option>
        </select>
      </div>

      <div class="form-group">
        <label for="DaysTo">يوم النهاية</label>
        <select name="DaysTo" id="DaysTo" class="form-select">
          <option value="الأحد" {{ isset($availableDay) && $availableDay->to == 'الأحد' ? 'selected' : '' }}>الأحد</option>
          <option value="الاثنين" {{ isset($availableDay) && $availableDay->to == 'الاثنين' ? 'selected' : '' }}>الاثنين</option>
          <option value="الثلاثاء" {{ isset($availableDay) && $availableDay->to == 'الثلاثاء' ? 'selected' : '' }}>الثلاثاء</option>
          <option value="الأربعاء" {{ isset($availableDay) && $availableDay->to == 'الأربعاء' ? 'selected' : '' }}>الأربعاء</option>
          <option value="الخميس" {{ isset($availableDay) && $availableDay->to == 'الخميس' ? 'selected' : '' }}>الخميس</option>
          <option value="الجمعة" {{ isset($availableDay) && $availableDay->to == 'الجمعة' ? 'selected' : '' }}>الجمعة</option>
          <option value="السبت" {{ isset($availableDay) && $availableDay->to == 'السبت' ? 'selected' : '' }}>السبت</option>
        </select>
      </div>

      <div class="form-group">
        <label for="HoursFrom">ساعة البداية</label>
        <input type="time" name="HoursFrom" id="HoursFrom" class="form-control"
               value="{{ isset($availableHour) ? $availableHour->from : '' }}">
      </div>

      <div class="form-group">
        <label for="HoursTo">ساعة النهاية</label>
        <input type="time" name="HoursTo" id="HoursTo" class="form-control"
               value="{{ isset($availableHour) ? $availableHour->to : '' }}">
      </div>

      <button type="submit" class="register-btn">تعديل</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
      html: '{!! implode(' < br > ', $errors->all()) !!}',
      confirmButtonText: 'حسناً',
      customClass: {
        title: 'swal-title',
        htmlContainer: 'swal-html-container',
        confirmButton: 'swal-confirm-button'
      }
    });
  </script>
  @endif

  <script src="script.js"></script>
</body>

</html>