<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>حسابي</title>
  <link rel="stylesheet" href="../includes/css/style.css" media="screen">
  <link rel="stylesheet" href="../includes/Corporate-Account/css/myprofile.css" media="screen">
  <script class="u-script" type="text/javascript" src="../includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="../includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800|Cairo:200,300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    *{
     font-family: Almarai;
    }
    :root {
      --primary-color: #2196F3;
      --secondary-color: #FFC107;
      --text-color: #333;
      --bg-color: #f5f5f5;
      --card-bg: #fff;
      --danger-color: #f44336;
      --success-color: #4CAF50;
    }

    body {
      background: var(--bg-color);
      font-family: 'Cairo', sans-serif;
      margin: 0;
      padding: 0;
    }

    .profile-header {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      padding: 2rem;
      border-radius: 0 0 2rem 2rem;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      margin-bottom: 2rem;
      text-align: center;
    }

    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 4px solid var(--card-bg);
      margin: 0 auto;
      display: block;
      object-fit: cover;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1rem;
      padding: 1rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .menu-item {
     background-color: rgb(15, 121, 148);
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 1rem;
      position: relative;
      overflow: hidden;
    }

    .menu-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: var(--primary-color);
      transform: scaleY(0);
      transition: transform 0.3s ease;
    }

    .menu-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .menu-item:hover::before {
      transform: scaleY(1);
    }

    .menu-icon {
      width: 40px;
      height: 40px;
      padding: 0.5rem;
      border-radius: 0.5rem;
      background: var(--bg-color);
      transition: transform 0.3s ease;
    }

    .menu-item:hover .menu-icon {
      transform: rotate(10deg);
    }

    .menu-text {
      font-size: 1rem;
     color: white;
      flex: 1;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 1000;
      backdrop-filter: blur(5px);
    }

    .modal-content {
      background: var(--card-bg);
      width: 90%;
      max-width: 500px;
      margin: 2rem auto;
      padding: 2rem;
      border-radius: 1rem;
      animation: slideIn 0.3s ease;
      position: relative;
    }

    .modal-close {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: none;
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: var(--text-color);
    }

    /* Form Elements */
    .form-group {
      margin-bottom: 1rem;
    }

    .form-control {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      font-family: 'Cairo', sans-serif;
      font-size: 1rem;
    }

    .btn {
      padding: 0.75rem 1.5rem;
      border-radius: 0.5rem;
      border: none;
      cursor: pointer;
      font-family: 'Cairo', sans-serif;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background: var(--primary-color);
      color: white;
    }

    .btn-danger {
      background: var(--danger-color);
      color: white;
    }

    .btn-success {
      background: var(--success-color);
      color: white;
    }

    /* Status Badges */
    .status-badge {
      padding: 0.5rem 1rem;
      border-radius: 2rem;
      font-weight: bold;
      display: inline-block;
    }

    .status-available {
      background: var(--success-color);
      color: white;
    }

    .status-busy {
      background: var(--danger-color);
      color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .menu-grid {
        grid-template-columns: 1fr;
      }
      
      .modal-content {
        width: 95%;
        margin: 1rem auto;
      }
      
      .profile-header {
        padding: 1rem;
      }
      
      .profile-image {
        width: 100px;
        height: 100px;
      }
    }
  </style>
</head>

<body class="u-body u-xl-mode" data-lang="en">
  @include('company-account.includes.fixedbar')
  
  <div class="profile-header">
    <img class="profile-image" src="{{ asset('storage/' . auth()->user()->profile_img) }}" alt="Profile Image">
    <h2 class="profile-name">{{ auth()->user()->name }}</h2>
    <div class="status-badge {{ auth()->user()->status ? 'status-available' : 'status-busy' }}">
      {{ auth()->user()->status ? 'متاح' : 'مشغول' }}
    </div>
  </div>

  <div class="menu-grid">
    <!-- Wallet -->
    <div class="menu-item" onclick="window.location.href='{{ route('company-wallet') }}'">
      <li class="fa-solid fa-wallet" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">المحفظة: {{ auth()->user()->balance }} د.ك</span>
    </div>

    <!-- Withdrawal History -->
    <div class="menu-item" onclick="window.location.href='{{ route('company-withdrawal-history') }}'">
      <li class="fa-solid fa-money-bill-transfer" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">طلبات السحب</span>
    </div>

    <!-- Share Profile -->
    <div class="menu-item" id="shareProfile">
      <li class="fa-solid fa-share-from-square" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">مشاركة الملف الشخصي</span>
    </div>
    <!-- see Profile -->
    <div class="menu-item" onclick="window.location.href = window.location.origin + '/company-account/{{ auth()->user()->id }}'">
      <li class="fa-solid fa-eye" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">عرض الملف الشخصي</span>
    </div>

    <!-- Edit Profile -->
    <div class="menu-item" onclick="window.location.href='{{ route('company-profile.edit') }}'">
      <li class="fa-solid fa-pen-to-square" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">تعديل الملف الشخصي</span>
    </div>

    <!-- Activate Offers -->
    <div class="menu-item" onclick="openOffersModal()">
      <li class="fa-solid fa-gift" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">تفعيل العروض</span>
    </div>

    <!-- Company Settings -->
    <div class="menu-item" onclick="window.location.href='{{ route('company_setting') }}'">
      <li class="fa-solid fa-gear" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">تغيير اعدادات الشركة</span>
    </div>

    <!-- Add Advertisement -->
    <div class="menu-item" onclick="window.location.href='{{ route('company-new-add') }}'">
      <li class="fa-solid fa-plus" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">اضافة اعلان عام($)</span>
    </div>

    <!-- Advertisement History -->
    <div class="menu-item" onclick="window.location.href='{{ route('company-my-ads') }}'">
      <li class="fa-solid fa-newspaper" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">سجل الاعلانات</span>
    </div>

    <!-- Add Post -->
    <div class="menu-item" onclick="openPostModal()">
      <li class="fa-solid fa-upload" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">اضافة منشور للملف الشخصي</span>
    </div>
    <!-- Reviews  -->
    <div class="menu-item" onclick="window.location.href='{{ route('rev', auth()->user()->id) }}'">
      <li class="fa-solid fa-star" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">التقييمات</span>
    </div>
        <div class="menu-item" onclick="window.location.href='{{ route('all-products') }}'">
      <li class="fa-solid fa-box" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">المنتجات</span>
    </div>
     <div class="menu-item" onclick="window.location.href='{{ route('orders.view') }}'">
      <li class="fa-solid fa-cart-shopping" style="color: white; font-size: 32px;"></li>
      <span class="menu-text">عربة المشتريات</span>
    </div>
     <div class="menu-item" onclick="window.location.href='{{ route('receiptAll') }}'">
      <li class="fa-solid fa-file-invoice" style="color: white; font-size: 32px;"></li>
      <span class="menu-text"> الفواتير</span>
    </div>
    <!-- Logout -->
    <div class="menu-item" onclick="confirmLogout()">
      <img class="menu-icon" src="../includes/images/11019316.png" alt="logout">
      <span class="menu-text">تسجيل الخروج</span>
    </div>
  </div>
<div style="height: 100px;"></div>
  <!-- Modals -->
  <div id="offersModal" class="modal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal('offersModal')">&times;</button>
      <h3>تفعيل العرض</h3>
      <form id="offerForm" method="POST" action="{{ route('offer.post') }}">
        @csrf
        <input type="hidden" name="company_id" value="{{ auth()->user()->id }}">
        <div class="form-group">
          <input type="number" class="form-control" name="quantity" placeholder="عدد الغسلات" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="gift" placeholder="الهدية" required>
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
      </form>
    </div>
  </div>

  <div id="postModal" class="modal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal('postModal')">&times;</button>
      <h3>اضافة منشور جديد</h3>
      <form id="postForm" method="POST" action="/addPost" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input type="file" class="form-control" name="img" accept="image/*,video/*" required>
        </div>
        <button type="submit" class="btn btn-primary">نشر</button>
      </form>
    </div>
  </div>

  <script>
    function openModal(modalId) {
      document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
      document.getElementById(modalId).style.display = 'none';
    }

    function openOffersModal() {
      openModal('offersModal');
    }

    function openPostModal() {
      openModal('postModal');
    }

    function confirmLogout() {
      if(confirm('هل تود تسجيل الخروج بالفعل؟')) {
        window.location.href = '/logout';
      }
    }

    // Share Profile
    document.getElementById('shareProfile').addEventListener('click', function() {
      const url = window.location.origin + '/company-account/{{ auth()->user()->id }}';
      navigator.clipboard.writeText(url).then(() => {
        alert('تم نسخ الرابط بنجاح!');
      });
    });

    // Close modals when clicking outside
    window.onclick = function(event) {
      if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
      }
    }
  </script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '',
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
</body>
</html>