<link rel="stylesheet" href="/includes/css/load.css" media="screen">
<script class="u-script" type="text/javascript" src="/includes/js/load.js" defer=""></script>
<!---======================================================================---------->
<div id="overlay" class="overlay">
    <div class="overlay-content">
        <!---=====================================--->
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

        <dotlottie-player src="https://lottie.host/c02abad2-ad59-40a6-9164-0807c717a3fe/W2j4lFJ6rd.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <!---=====================================--->
    </div>
</div>
<!---------------------------------------->
<div class="overlaymain" id="overlaymain">
    <!---=====================================--->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player src="https://lottie.host/c02abad2-ad59-40a6-9164-0807c717a3fe/W2j4lFJ6rd.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
    <!---=====================================--->
</div>

<!---========================================================================-------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<section class="section-to-hide">
    <div class="bottom-bar">
        <nav class="nav-menu">
            <ul>
                <li onclick="showOverlay()">
                    <a href="{{route('profile')}}">
                        <i class="fas fa-user"></i>
                        <span>حسابي</span>
                    </a>
                </li>
                <li onclick="showOverlay()">
                    <a href="{{ route('notification') }}">
                        <i class="fas fa-bell"></i>
                        <span>الاشعارات</span>
                    </a>
                </li>
                <li onclick="showOverlay()">
                    <a href="{{ route('orders-history') }}">
                        <i class="fas fa-history"></i>
                        <span>السجل</span>
                    </a>
                </li>
                <li onclick="showOverlay()">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <span>المنزل</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <style>
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .nav-menu ul {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 0;
            padding: 10px 0;
            list-style: none;
        }

        .nav-menu li {
            text-align: center;
        }

        .nav-menu a {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
            text-decoration: none;
            font-family: 'Almarai', sans-serif;
        }

        .nav-menu i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .nav-menu span {
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .nav-menu span {
                font-size: 10px;
            }
            
            .nav-menu i {
                font-size: 20px;
            }
        }
    </style>

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
            html: '{!! implode('<br>', $errors->all()) !!}',
            confirmButtonText: 'حسناً',
            customClass: {
                title: 'swal-title',
                htmlContainer: 'swal-html-container',
                confirmButton: 'swal-confirm-button'
            }
        });
    </script>
    @endif
</section>