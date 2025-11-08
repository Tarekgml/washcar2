<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>تسجيل الدخول</title>

  <!-- CSS -->
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="includes/images/favicon.png">


  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Rubik', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #f7f7f7 0%, #e3e3e3 100%);
      font-family: 'Rubik', sans-serif;
    }

    .container {
      background-color: #fff;
      padding: 35px;
      width: 420px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      font-family: 'Rubik', sans-serif;
      direction: rtl;
      transition: transform 0.3s ease;
    }

    .container:hover {
      transform: translateY(-5px);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      font-family: 'Rubik', sans-serif;
      color: #333;
      font-size: 28px;
      font-weight: 600;
    }

    .container p {
      text-align: center;
      margin-bottom: 30px;
      color: #666;
      font-size: 16px;
    }

    .form-group {
      margin-bottom: 25px;
      position: relative;
    }

    .form-group label {
      display: block;
      font-size: 15px;
      margin-bottom: 10px;
      color: #444;
      font-weight: 500;
    }

    .form-group input {
      width: 100%;
      padding: 15px;
      border: 2px solid #e1e1e1;
      border-radius: 12px;
      font-size: 15px;
      transition: all 0.3s ease;
      background-color: #f8f9fa;
    }

    .form-group input:focus {
      border-color: #0056b3;
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
      background-color: #fff;
    }

    .form-group input[type="password"] {
      padding-right: 45px;
    }

    .register-btn {
      width: 100%;
      padding: 16px;
      background: linear-gradient(135deg, #0056b3 0%, #007bff 100%);
      color: #fff;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-size: 17px;
      font-weight: 600;
      transition: all 0.3s ease;
      margin-top: 10px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .register-btn:hover {
      background: linear-gradient(135deg, #004494 0%, #0056b3 100%);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 86, 179, 0.2);
    }

    .register-btn:active {
      transform: translateY(0);
    }

    a {
      text-align: center;
      display: block;
      margin-top: 25px;
      color: #0056b3;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    a:hover {
      color: #004494;
      text-decoration: underline;
    }

    img {
      width: 220px;
      margin-bottom: 30px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      transition: transform 0.3s ease;
    }

    img:hover {
      transform: scale(1.05);
    }

    .forgot-password {
      text-align: left;
      font-size: 14px;
      margin-top: -15px;
      margin-bottom: 20px;
    }
  </style>

</head>

<body>

  <div class="container">
    <img src="includes/images/logo.png" alt="logo">
    <h2>تسجيل الدخول</h2>
    <p>أدخل معلوماتك الشخصية</p>
    <form method="POST" action="{{ route('login') }}">@csrf
      <div class="form-group">
        <label for="email">البريد الإلكتروني</label>
        <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني">
      </div>
      <div class="form-group">
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور">
      </div>
     

      <button type="submit" class="register-btn">تسجيل الدخول</button>
    </form>
    <div class="forgot-password">
        <a href="/forgot_password">هل نسيت كلمة المرور؟</a>
      </div>
    <a href="{{ route('signup') }}">ليس لديك حساب؟ فتح حساب جديد</a>
  </div>

   
        
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (session('success'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'تم  بنجاح!',
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
        html: '{!! implode("<br>", $errors->all()) !!}',
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