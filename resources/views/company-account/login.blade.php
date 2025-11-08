<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title>تسجيل الدخول</title>

    <!-- CSS -->
    <link rel="stylesheet" href="includes/css/styleass.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="icon" href="includes/images/favicon.png">
</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <center>
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/8407caff-204e-4983-89ae-44f1271352bd/Dnff3pMeNQ.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                </center>
                <header style="font-family: Rubik; font-size: large;"> الدخول الي حسابك</header>


                <form  method="POST" action="{{ route('company-login.post') }}">@csrf

                    <div class="field input-field">
                        <input name="email" type="email" placeholder="أدخل بريدك الالكتروني" class="input" style="font-family: Rubik; direction:rtl;">

                    </div>

                    <div class="field input-field">
                        <input name="password" type="password" placeholder="  أدخل كلمة لسر" class="password" style="font-family: Rubik; direction:rtl;">

                    </div>



                    <div class="field button-field">
                        <button style="font-family: Rubik;">تسجيل الدخول</button>
                    </div>

                </form>
                <div class="form-link">
                    <span style="font-family: Rubik;"> ليس لديك حساب...؟<a onclick="showOverlay()" href="{{ route('company-signup') }}" class=signup-link" style="font-family: Rubik;"> انشاء حساب جديد </a></span>
                </div>
            </div>

            <div class="line"></div>
            <div class="media-options">
                <a href="https://watadcash.com/user/auth/google/redirect" class="field google">
                    <img src="includes/images/whatsapp.png" alt="" class="google-img">
                    <span style="direction: rtl; font-family: Rubik;">المتابعه باستخدام واتساب </span>
                </a>
            </div>
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


        <!-- JavaScript -->
        <script src="script.js"></script>
</body>

</html>