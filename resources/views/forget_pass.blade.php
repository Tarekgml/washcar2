<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسيت كلمة المرور</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


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
            transition: all 0.3s ease;
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
            position: relative;
            overflow: hidden;
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }
        button:active {
            transform: translateY(0);
        }
        .verification-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<div class="container">
    <h2>نسيت كلمة المرور</h2>

    <div class="email-section">
        <div class="form-group">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button onclick="sendVerificationCode()">إرسال رمز التحقق</button>
    </div>

    <div class="verification-section" id="verificationSection" style="display: none;">
        <div class="form-group">
            <label for="verificationCode">رمز التحقق</label>
            <input type="text" id="verificationCode" name="verificationCode" required>
        </div>
        <button onclick="verifyCode()">تحقق</button>
    </div>
</div>

<script>
    function sendVerificationCode() {
        const email = document.getElementById('email').value;

        axios.post('/api/send-code', { email })
            .then(response => {
                alert(response.data.message);
                document.getElementById('verificationSection').style.display = 'block';
            })
            .catch(error => {
                if (error.response) {
                    alert(error.response.data.message);
                } else {
                    console.error(error);
                }
            });
    }

    function verifyCode() {
        const email = document.getElementById('email').value;
        const verificationCode = document.getElementById('verificationCode').value;

        axios.post('/api/verify-code', { email, verificationCode })
            .then(response => {
                alert(response.data.message);
setTimeout(() => {
    window.location.href = `/reset_password/${response.data.token}`;
}, 3000);
            })
            .catch(error => {
                if (error.response) {
                    alert(error.response.data.message);
                } else {
                    console.error(error);
                }
            });
    }
</script>

</body>
</html>
