<!DOCTYPE html>
<html lang="ar-KW" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>سجل الطلبات</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Almarai', sans-serif;
      background-color: #f8f9fa;
    }

    .section-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin: 20px 0;
      flex-wrap: wrap;
    }

    .section-button {
      background-color: #0d6efd;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      transition: all 0.3s ease;
      min-width: 150px;
    }

    .section-button:hover {
      background-color: #0b5ed7;
      transform: translateY(-2px);
    }

    .order-card {
      transition: all 0.3s ease;
      border-radius: 15px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .order-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }

    .profile-img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #0d6efd;
    }

    .section {
      display: none;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .empty-state {
      text-align: center;
      padding: 40px 20px;
    }
  </style>
</head>

<body>
  @include('includes.fixedbar')

  <div class="container py-5">
    <h3 class="text-center mb-4">سجل الطلبات</h3>

    @php
    $appointemnts = \App\Models\Appointment::where('user_id', auth()->user()->id)->get();
    $orders = \App\Models\Order::where('user_id', auth()->user()->id)->get();
    $carRentals = \App\Models\CarRental::where('user_id', auth()->user()->id)->get();
    $sellCarOrder = \App\Models\SellCarOrder::where('user_id', auth()->user()->id)->get();
    @endphp

    <div class="section-buttons">
      <button class="section-button" onclick="showSection('appointments')">سجل الغسلات</button>
      <button class="section-button" onclick="showSection('orders')">سجل المنتجات</button>
      <button class="section-button" onclick="showSection('carRentals')">سجل الايجار</button>
      <button class="section-button" onclick="showSection('sellCarOrder')">بيع السيارات</button>
    </div>

    <div id="appointments" class="section">
      @if($appointemnts->isEmpty())
      <div class="empty-state">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <h5>لا توجد سجلات غسيل</h5>
      </div>
      @else
      <div class="row">
        @foreach($appointemnts as $appointment)
        @php
        $company = \App\Models\User::find($appointment->company_id)
        @endphp
        <div class="col-md-6 col-lg-4">
          <div class="card order-card" onclick="window.location.href='{{ route('live-car', $appointment->id) }}'">
            <div class="card-body text-center">
              <img src="{{ $company->car_img ?? 'includes/images/default-car.jpg' }}" class="profile-img mb-3" alt="صورة السيارة">
              <h5 class="card-title">{{ $company->name }}</h5>
              <p class="card-text">رقم الطلب: {{ $appointment->uuid }}</p>
              <p class="card-text">{{ $appointment->time }}</p>
              <p class="card-text fw-bold">التكلفة: {{ $company->price }} د.ك</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>

    <div id="orders" class="section">
      @if($orders->isEmpty())
      <div class="empty-state">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <h5>لا توجد سجلات منتجات</h5>
      </div>
      @else
      <div class="row">
        @foreach($orders as $order)
        @php
        $product = \App\Models\Product::find($order->product_id)
        @endphp
        <div class="col-md-6 col-lg-4">
          <div class="card order-card">
            <div class="card-body text-center">
              <img src="/storage/{{ $product->image[0] }}" class="profile-img mb-3" alt="صورة المنتج">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $order->status }}</p>
              <p class="card-text fw-bold">التكلفة: {{ $product->price }} د.ك</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>

    <div id="carRentals" class="section">
      @if($carRentals->isEmpty())
      <div class="empty-state">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <h5>لا توجد سجلات إستأجار</h5>
      </div>
      @else
      <div class="row">
        @foreach($carRentals as $rental)
        @php
        $car = \App\Models\Car::find($rental->car_id)
        @endphp
        <div class="col-md-6 col-lg-4">
          <div class="card order-card">
            <div class="card-body text-center">
              <img src="/storage/{{ $car->imgs[0] }}" class="profile-img mb-3" alt="صورة السيارة">
              <h5 class="card-title">{{ $car->name }}</h5>
              <p class="card-text fw-bold">التكلفة: {{ $car->price }} د.ك</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>

  <div id="sellCarOrder" class="section">
    @if($sellCarOrder->isEmpty())
    <div class="empty-state">
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
      <dotlottie-player src="https://lottie.host/674feb3f-05a4-42aa-becb-a9cda5eeba1c/Ynp9pPtfFq.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
      <h5>لا توجد سجلات بيع السيارات</h5>
    </div>
    @endif
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    // Show initial section
    document.getElementById('appointments').style.display = 'block';

    function showSection(sectionId) {
      // Hide all sections
      const sections = document.getElementsByClassName('section');
      for(let section of sections) {
        section.style.display = 'none';
      }
      
      // Show selected section
      document.getElementById(sectionId).style.display = 'block';
    }
  </script>

</body>
</html>