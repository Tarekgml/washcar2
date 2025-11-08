<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعادة تعيين كلمة المرور</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(135deg, #f6f8fd 0%, #e9ecf5 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            transform: translateY(0);
            transition: all 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .form-group {
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e1e8f0;
            border-radius: 12px;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
        }
        button {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            width: 100%;
            font-family: 'Tajawal', sans-serif;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }
        button:active {
            transform: translateY(0);
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        .password-requirements {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>
<body>
@php
    $token = request()->query('token');
@endphp

<div class="container">
    <h2>إعادة تعيين كلمة المرور</h2>
    <form action="{{ url('/reset-password') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $id }}"> <!-- Secure token -->
        <div class="form-group">
            <label for="newPassword">كلمة المرور الجديدة</label>
            <input type="password" id="newPassword" name="newPassword" required>
            <div class="password-requirements">
                يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل
            </div>
        </div>
        <div class="form-group">
            <label for="confirmPassword">تأكيد كلمة المرور</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <button type="submit">تغيير كلمة المرور</button>
    </form>
</div>


</body>
</html>
