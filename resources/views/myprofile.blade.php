<!DOCTYPE html>
<html lang="ar-KW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت">
    <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها">
    <title>حسابي</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f8f9fa;
        }

        .profile-section {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 2rem;
            margin: 20px 0;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
            border: 3px solid #1d99be;
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 10px #1d99be;
            }
            to {
                box-shadow: 0 0 20px #1d99be, 0 0 30px #1d99be;
            }
        }

        .menu-item {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            margin: 10px 0;
            transition: all 0.3s ease;
            border: 1px solid #eee;
            cursor: pointer;
        }

        .menu-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .menu-item i {
            color: #1d99be;
            font-size: 1.5rem;
            margin-left: 10px;
        }

        .menu-text {
            color: #333;
            font-size: 1rem;
            font-weight: 600;
        }

        .logout-item {
            color: #dc3545;
        }

        .points-badge {
            background: #1d99be;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .wallet-section {
            background: linear-gradient(45deg, #1d99be, #2ab6e1);
            color: white;
            padding: 1.5rem;
            border-radius: 15px;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    @include('includes.fixedbar')
    <div class="container py-4">
        <!-- Profile Section -->
        <div class="profile-section text-center">
            <img class="profile-image mb-3" src="/storage/{{ auth()->user()->profile_img }}" alt="Profile Image">
            <h4 class="mb-2">{{ auth()->user()->name }}</h4>
            <div class="points-badge">
                النقاط: {{ auth()->user()->coins }}
            </div>
        </div>

        <!-- Wallet Section -->
        <div class="wallet-section" onclick="window.location.href='{{ route('wallet') }}'">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">المحفظة</h5>
                <h4 class="mb-0">{{ auth()->user()->balance }} د.ك</h4>
            </div>
        </div>

        <!-- Menu Items -->
        <div class="menu-items">
            @php
                $appointment = \App\Models\Appointment::where('user_id', auth()->user()->id)->latest()->first();
            @endphp
            
            @if(isset($appointment))
            <div class="menu-item" onclick="window.location.href='{{ route('live-car', $appointment->id) }}'">
                <i class="fas fa-broadcast-tower"></i>
                <span class="menu-text">جلسات الغسيل النشطة</span>
            </div>
            @endif

            <div class="menu-item" onclick="window.location.href='{{ route('history') }}'">
                <i class="fas fa-history"></i>
                <span class="menu-text">طلباتي</span>
            </div>
            
            <div class="menu-item" onclick="window.location.href='{{ route('receiptAll') }}'">
                <i class="fas fa-file-invoice"></i>
                <span class="menu-text">الفواتير</span>
            </div>

            <div class="menu-item" onclick="window.location.href='{{ route('orders.view') }}'">
                <i class="fas fa-shopping-cart"></i>
                <span class="menu-text">سلة المشتريات</span>
            </div>

            <div class="menu-item" onclick="window.location.href='{{ route('reward') }}'">
                <i class="fas fa-star"></i>
                <span class="menu-text">نقاط المكافأة</span>
            </div>

            <div class="menu-item" onclick="window.location.href='{{ route('edit-info') }}'">
                <i class="fas fa-cog"></i>
                <span class="menu-text">اعدادات الحساب</span>
            </div>

            <div class="menu-item" onclick="window.location.href='{{ route('about') }}'">
                <i class="fas fa-info-circle"></i>
                <span class="menu-text">من نحن</span>
            </div>

            <div class="menu-item" onclick="contact()">
                <i class="fas fa-headset"></i>
                <span class="menu-text">تواصل معنا</span>
            </div>

            <div class="menu-item" onclick="window.location.href='{{ route('policy') }}'">
                <i class="fas fa-file-alt"></i>
                <span class="menu-text"> سياساتنا والشروط </span>
            </div>
            <!----------------------------------------------------->
            <div class="dropdown">
                <div class="menu-item" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-language"></i>
                    <span class="menu-text">اللغة</span>
                </div>
                <ul class="dropdown-menu text-end" style="min-width: 100%;">
                    <li>
                        <a class="dropdown-item py-2" href="/">
                            <i class="fas fa-language ms-2"></i>
                            عربي
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item py-2" href="/">
                            <i class="fas fa-language ms-2"></i>
                            English
                        </a>
                    </li>
                </ul>
            </div>
            <!----------------------------------------------------->

            <div class="menu-item logout-item" onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt"></i>
                <span class="menu-text">تسجيل الخروج</span>
            </div>

    




        </div>
    </div>

    <div style="height: 100px;"></div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'هل تود تسجيل الخروج بالفعل؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'نعم',
                cancelButtonText: 'لا'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('logout') }}";
                }
            });
        }

        function contact() {
            Swal.fire({
                title: 'هل تريد التواصل عبر واتساب؟',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'المتابعة للمحادثة',
                cancelButtonText: 'لا شكراً'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open('https://api.whatsapp.com/message/LDJUUIIMAI7WC1?autoload=1&app_absent=0', '_blank');
                }
            });
        }
    </script>
</body>
</html>