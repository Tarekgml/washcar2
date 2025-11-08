<!DOCTYPE html>
<html lang="ar-KW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات">
  <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت">
  <title>عرض السياره مباشر</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Almarai', sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      min-height: 100vh;
    }
    
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #007bff;
    }

    .status-badge {
      padding: 8px 15px;
      border-radius: 20px;
      font-size: 14px;
    }

    .rating-stars {
      font-size: 24px;
      color: #ffd700;
    }

    .btn-custom {
      border-radius: 25px;
      padding: 10px 25px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .btn-custom:hover {
      transform: scale(1.05);
    }

    .animate-fade {
      animation: fadeIn 1s ease-in;
    }
  </style>
</head>

<body>
  @include('includes.fixedbar')

  <div class="container py-5 animate__animated animate__fadeIn">
    <div class="text-center mb-5">
      <h1 class="display-4 fw-bold animate__animated animate__slideInDown">
        <i class="fas fa-car-wash"></i> غسيل سيارتك مباشر
      </h1>
    </div>

    @php
      $appointment = \App\Models\Appointment::doesntHave('rate')->find($id);
    @endphp

    @if($appointment)
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-4 animate__animated animate__zoomIn">
          <div class="text-center">
            <img src="/storage/{{ \App\Models\User::find($appointment->company_id)->profile_img }}" 
                 class="profile-img mb-3 animate__animated animate__pulse animate__infinite" 
                 alt="Profile Image">
            
            <h3 class="mb-3">طلب غسيل سيارة</h3>
            <p class="text-muted mb-2">رقم الطلب: {{ $appointment->uuid }}</p>
            <h4 class="mb-3">{{ \App\Models\User::find($appointment->company_id)->name }}</h4>

            @php
              $days = [
                'monday' => 'الإثنين',
                'tuesday' => 'الثلاثاء',
                'wednesday' => 'الأربعاء',
                'thursday' => 'الخميس',
                'friday' => 'الجمعة',
                'saturday' => 'السبت',
                'sunday' => 'الأحد',
              ];
            @endphp

            <p class="mb-4">{{ $appointment->time }} {{ $days[strtolower($appointment->day)] ?? $appointment->day }}</p>

            @if($appointment->status == 'مكتمل')
              <button class="btn btn-primary btn-custom animate__animated animate__pulse" id="rateButton">
                <i class="fas fa-star"></i> إضافة تقييم وتعليق
              </button>
            @else
              <div class="status-badge bg-info text-white mb-3">
                {{ $appointment->status == 'pending' ? 'قيد المراجعة' : $appointment->status }}
              </div>
              
              @if($appointment->meet_link)
                <a onclick="window.open('{{ $appointment->meet_link }}', '_blank')" class="btn btn-success btn-custom" style="cursor: pointer;">
                  <i class="fas fa-video"></i> مشاهدة الجلسة
                </a>
              @endif
            @endif
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="text-center mt-5 animate__animated animate__fadeIn">
      <div class="alert alert-info d-inline-block">
        <h4 class="mb-0">لا يوجد طلبات</h4>
      </div>
    </div>
    @endif
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/your-code.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    document.getElementById('rateButton')?.addEventListener('click', function() {
      Swal.fire({
        title: 'إضافة تقييم',
        html: `
          <form id="rateForm" action="{{ route('rate') }}" method="POST" class="text-center">
            @csrf
            <input type="hidden" name="company_id" value="{{ $appointment->company_id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
            
            <div class="mb-3">
              <label class="form-label">التقييم:</label>
              <select class="form-select" name="rate">
                <option value="1">⭐</option>
                <option value="2">⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
              </select>
            </div>
            
            <div class="mb-3">
              <input type="text" class="form-control" name="comment" placeholder="اكتب تعليقك هنا">
            </div>

            <button type="submit" class="btn btn-primary me-2">إرسال</button>
            <button type="button" class="btn btn-secondary" onclick="Swal.close()">إلغاء</button>
          </form>
        `,
        showConfirmButton: false,
        showCancelButton: false,
        allowOutsideClick: false
      });
    });
  </script>
</body>
</html>