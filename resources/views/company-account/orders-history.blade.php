<!DOCTYPE html>
<html lang="ar-KW">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات">
  <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت">
  <title>سجل الطلبات المكتملة</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    * {
      font-family: 'Almarai', sans-serif;
    }

    body {
      background: #f0f2f5;

    }

    .header {
      background: linear-gradient(45deg, #2193b0, #6dd5ed);
      padding: 4rem 1rem;
      color: white;
      text-align: center;
      position: relative;
      margin-bottom: 4rem;
      border-radius: 0 0 50px 50px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .header h1 {
      font-size: 3rem;
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
      margin-bottom: 1rem;
    }

    .header::after {
      content: '';
      position: absolute;
      bottom: -20px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 6px;
      background: #fff;
      border-radius: 3px;
    }

    .order-card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      margin-bottom: 2.5rem;
      transition: all 0.4s ease;
      overflow: hidden;
      border: 1px solid rgba(0,0,0,0.05);
    }

    .order-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }

    .pending-badge {
      position: absolute;
      top: -12px;
      right: -12px;
      background: linear-gradient(45deg, #ffd700, #ffa500);
      color: #000;
      padding: 0.6rem;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      box-shadow: 0 4px 15px rgba(255,165,0,0.3);
      z-index: 1;
    }

    .profile-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 20px 20px 0 0;
      transition: transform 0.3s ease;
    }

    .order-card:hover .profile-img {
      transform: scale(1.05);
    }

    .order-details {
      padding: 2.5rem;
    }

    .info-item {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      margin-bottom: 1.2rem;
      padding: 1rem;
      background: #f8f9fa;
      border-radius: 15px;
      transition: all 0.3s ease;
    }

    .info-item:hover {
      background: #e9ecef;
      transform: translateX(-5px);
    }

    .info-item i {
      color: #2193b0;
      font-size: 1.3rem;
      width: 28px;
      text-align: center;
    }

    .status-badge {
      background: linear-gradient(45deg, #2193b0, #6dd5ed);
      color: white;
      padding: 0.6rem 1.2rem;
      border-radius: 50px;
      font-size: 0.95rem;
      display: inline-block;
      box-shadow: 0 4px 15px rgba(33,147,176,0.3);
    }

    .price-tag {
      font-size: 1.8rem;
      font-weight: bold;
      background: linear-gradient(45deg, #28a745, #20c997);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .btn-details {
      width: 100%;
      padding: 1.2rem;
      border-radius: 15px;
      font-size: 1.2rem;
      margin-top: 1.5rem;
      background: linear-gradient(45deg, #2193b0, #6dd5ed);
      border: none;
      transition: all 0.3s ease;
    }

    .btn-details:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(33,147,176,0.4);
    }

    .modal-content {
      border-radius: 20px;
      border: none;
      box-shadow: 0 15px 50px rgba(0,0,0,0.1);
    }

    .modal-header {
      border-radius: 20px 20px 0 0;
      background: linear-gradient(45deg, #2193b0, #6dd5ed);
      color: white;
      padding: 1.5rem;
    }

    .modal-body {
      padding: 2.5rem;
    }

    .qr-code-container {
      text-align: center;
      padding: 2rem;
      background: #f8f9fa;
      border-radius: 15px;
      margin-top: 2.5rem;
      box-shadow: inset 0 2px 10px rgba(0,0,0,0.05);
    }

    .qr-code {
      max-width: 250px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .no-records {
      text-align: center;
      padding: 4rem;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    @media (max-width: 768px) {
      .header h1 {
        font-size: 2.2rem;
      }
      
      .order-details {
        padding: 1.8rem;
      }

      .info-item {
        padding: 0.8rem;
      }
    }
  </style>
</head>

<body>
  @include('company-account.includes.fixedbar')  

  <div class="header" data-aos="fade-down">
    <div class="container">
      <h1>سجل الطلبات</h1>
    </div>
  </div>

  <div class="container">
    @php
      $apps = \App\Models\Appointment::where('company_id', auth()->user()->id)->get()->reverse();
    @endphp

    @if($apps->isEmpty())
      <div class="no-records" data-aos="fade-up">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json" background="transparent" speed="1" style="width: 300px; height: 300px; margin: 0 auto;" loop autoplay></dotlottie-player>
        <h5 class="mt-4">لا توجد سجلات</h5>
      </div>
    @else
      <div class="row">
        @foreach($apps as $app)
          <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="order-card">
              @if($app->status == 'قيد المراجعة')
                <div class="pending-badge">
                  <i class="fas fa-clock"></i>
                </div>
              @endif
              @php
                  $user = \App\Models\User::find($app->user_id);
                  $carImg = $user && $user->car_img ? "/storage/{$user->car_img}" : "/includes/images/c9df64b29a90930daae07d4a9f80e2cb0068382e0c4ea27b2a08c1392ef4e4c97fb29a9767f28f1d2aa04a8f540423c9f55acd41546326e81c10f3_1280.jpg";
              @endphp

              <img class="profile-img" src="{{ $carImg }}" alt="صورة السيارة">
              
              <div class="order-details">
                <div class="info-item">
                  <i class="fas fa-car"></i>
                  <span>طلب غسيل سيارة</span>
                </div>

                <div class="info-item">
                  <i class="fas fa-user"></i>
                  <span>{{ \App\Models\User::find($app->user_id)->name }}</span>
                </div>

                @php
                  $daysTranslation = [
                    'monday' => 'الإثنين',
                    'tuesday' => 'الثلاثاء',
                    'wednesday' => 'الأربعاء',
                    'thursday' => 'الخميس',
                    'friday' => 'الجمعة',
                    'saturday' => 'السبت', 
                    'sunday' => 'الأحد',
                  ];
                @endphp

                <div class="info-item">
                  <i class="far fa-calendar-alt"></i>
                  <span>{{ $daysTranslation[$app->day] ?? $app->day }} {{ $app->time }}</span>
                </div>

                <div class="info-item">
                  <i class="fas fa-info-circle"></i>
                  <span class="status-badge">{{ $app->status }}</span>
                </div>

                <div class="info-item">
                  <i class="fas fa-tag"></i>
                  <span class="price-tag">{{ auth()->user()->price }} د.ك</span>
                </div>

                <button class="btn btn-primary btn-details" onclick="showQRCode()">
                  <i class="fas fa-qrcode me-2"></i>
                  عرض التفاصيل
                </button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif

    <!-- Modal -->
  
    <div class="modal fade" id="orderModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">تفاصيل الطلب</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="info-item">
              <i class="fas fa-hashtag"></i>
              <span>رقم العملية: {{ $app->uuid }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-user"></i>
              <span>صاحب الطلب: {{ \App\Models\User::find($app->user_id)->name }}</span>
            </div>
            <div class="info-item">
              <i class="far fa-calendar-alt"></i>
              <span>اليوم: {{ $daysTranslation[$app->day] ?? $app->day }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-calendar-day"></i>
              <span>التاريخ: {{ $app->created_at->format('Y-m-d') }}</span>
            </div>
            <div class="info-item">
              <i class="far fa-clock"></i>
              <span>الوقت: {{ $app->time }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-info-circle"></i>
              <span>الحالة: {{ $app->status }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-tag"></i>
              <span>التكلفة: {{ auth()->user()->price }} د.ك</span>
            </div>
            <div class="info-item">
              <i class="fas fa-car-side"></i>
              <span>نوع الغسيل: {{ $app->car_type ?? 'غير محدد' }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-car"></i>
              <span>نوع السيارة: {{ $app->car_wash ?? 'غير محدد' }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-sticky-note"></i>
              <span>الملاحظات: {{ $app->notes ?? 'لا يوجد ملاحظات' }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>الموقع: {{ \App\Models\User::find($app->user_id)->address }}</span>
            </div>
            <div class="info-item">
              <i class="fas fa-phone"></i>
              <span>رقم الهاتف: {{ \App\Models\User::find($app->user_id)->phone }}</span>
            </div>

            <div class="qr-code-container">
              <img class="qr-code" src="https://qrcode.tec-it.com/API/QRCode?data=ID:{{ $app->uuid }}|Name:{{ \App\Models\User::find($app->user_id)->name }}|Day:{{ $daysTranslation[$app->day] }}|Time:{{ $app->time }}|Status:{{ $app->status }}|Price:{{ auth()->user()->price }}" alt="QR Code">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  

  <!-- Bootstrap JS and AOS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
    
    const orderModal = new bootstrap.Modal(document.getElementById('orderModal'));
    
    function showQRCode() {
      orderModal.show();
    }
  </script>

</body>
</html>