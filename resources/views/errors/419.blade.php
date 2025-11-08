<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-TR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <title>washcarrent | حدث خطأ ما</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <meta name="theme-color" content="#478ac9">

    <meta property="og:type" content="website">
    <style>
        h4 {
            font-family: tajawal;
            text-align: center;
            color: #077cdb;
            font-size: 20px;
            font-weight: 800;
            direction: rtl;
        }

        h6 {
            font-family: tajawal;
            text-align: center;
            color: #09798d;
            font-size: 12px;
            direction: rtl;
        }
    </style>
</head>

<body>
    <div
        style="display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh;">
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
            type="module"></script>

        <dotlottie-player src="https://lottie.host/b1580390-e2f5-47ff-8b69-a4671395dd1c/xXsPTRbpVZ.json"
            background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>

        <h4 id="changingText">يواجة التطبيق خطأ في التواصل مع الخادم</h4>

        <h6>تواصل مع الدعم الفني من النافذة</h6>
    </div>


    <style>
        @keyframes fadeInOut {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0;
                transform: scale(0.95);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        #changingText.animate {
            animation: fadeInOut 1s ease-in-out;
        }
    </style>
    <script>
        const messages = [
            "يواجة التطبيق خطأ في التواصل مع الخادم",
            "نحاول الاتصال بالخادم مرة أخرى",
            "يرجى الانتظار قليلاً",
            "جاري إعادة المحاولة....",
            "سيتم إعادة الاتصال قريباً"
        ];
        let currentIndex = 0;
        const textElement = document.getElementById('changingText');

        function changeText() {
            textElement.classList.remove('animate');
            void textElement.offsetWidth; // Trigger reflow
            textElement.classList.add('animate');

            textElement.textContent = messages[currentIndex];
            currentIndex++;

            if (currentIndex >= messages.length) {
                currentIndex = 0;
                setTimeout(changeText, 10000); // Wait 10 seconds before starting over
            } else {
                setTimeout(changeText, 5000); // Change every 5 seconds
            }
        }

        changeText();
    </script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

    <script>
        function showReloadNotification() {
            iziToast.info({
                title: 'تنبيه',
                message: 'يتم إعادة الاتصال بالخادم',
                position: 'topCenter',
                rtl: true,
                timeout: 3000
            });
        }

        function reloadPage() {
            showReloadNotification();
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        }

        // تشغيل إعادة التحميل كل 25 ثانية
        setInterval(reloadPage, 25000);
    </script>

</body>

</html>