<!DOCTYPE html>
<html lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords"
        content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>wash carrent  | بيع سيارة</title>
    <link rel="stylesheet" href="includes/css/style.css" media="screen">
    <link rel="stylesheet" href="includes/css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="includes/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="includes/js/main.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="generator" content="wash car">
    <link rel="icon" href="includes/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <meta property="og:type" content="website">

    <style>
        html {
            font-size: 16px;
            box-sizing: border-box;
        }
        
        *, *:before, *:after {
            box-sizing: inherit;
        }

        .car-sale-form {
            direction: rtl;
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(120deg, #f8f9fa 0%, #ffffff 100%);
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            width: 95%;
            max-width: 900px;
            margin: 30px auto;
            overflow: hidden;
        }

        .car-sale-form h2 {
            color: #1a237e;
            text-align: center;
            font-size: clamp(1.5em, 5vw, 2.5em);
            margin-bottom: 30px;
            font-weight: 800;
            background: linear-gradient(45deg, #1a237e, #3949ab);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            word-wrap: break-word;
        }

        .car-sale-form form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
        }

        .form-group {
            position: relative;
            width: 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #1a237e;
            font-weight: 700;
            font-size: 1em;
            word-wrap: break-word;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: none;
            background: rgba(236, 239, 241, 0.7);
            border-radius: 12px;
            font-size: clamp(14px, 2vw, 16px);
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.06);
            max-width: 100%;
            word-wrap: break-word;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
            max-width: 100%;
        }

        .file-upload-container {
            border: 2px dashed #3949ab;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            background: rgba(236, 239, 241, 0.4);
            width: 100%;
            overflow: hidden;
        }

        .file-upload-container input[type="file"] {
            display: none;
        }

        .file-upload-label {
            cursor: pointer;
            color: #3949ab;
            font-weight: 600;
            font-size: clamp(14px, 2vw, 16px);
            word-wrap: break-word;
        }

        .file-upload-label span {
            display: block;
            margin-bottom: 8px;
        }

        .file-upload-label small {
            color: #666;
            font-size: clamp(12px, 1.5vw, 14px);
        }

        button[type="submit"] {
            background: linear-gradient(45deg, #1a237e, #3949ab);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 12px;
            font-size: clamp(1em, 3vw, 1.2em);
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(26, 35, 126, 0.2);
            width: 100%;
            max-width: 100%;
            word-wrap: break-word;
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(26, 35, 126, 0.3);
        }

        button[type="submit"]:not(:hover) {
            transform: translateY(0);
        }

        @media screen and (max-width: 768px) {
            .car-sale-form {
                padding: 15px;
                margin: 20px auto;
            }

            .form-group input,
            .form-group textarea {
                padding: 10px;
            }

            .file-upload-container {
                padding: 15px;
            }
        }

        @media screen and (max-width: 480px) {
            .car-sale-form {
                padding: 10px;
                margin: 15px auto;
                width: 98%;
            }

            .grid-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
  
</head>

<body>
    @include('includes.fixedbar')
    @include('includes.header')

    <div class="car-sale-form">
        <h2>نموذج طلب عرض سيارة للبيع</h2>
       <form action="{{ route('sellCarPost') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid-container">
        <div class="form-group">
            <label>عنوان الاعلان </label>
            <input type="text" name="owner_name" required placeholder="أدخل عنوان الاعلان">
        </div>

        <div class="form-group">
            <label>رقم الاتصال</label>
            <input type="tel" name="contact_number" required placeholder="أدخل رقم الاتصال">
        </div>
    </div>

    <div class="grid-container">
        <div class="form-group">
            <label>نوع السيارة</label>
            <input type="text" name="brand" required placeholder="أدخل نوع السيارة">
        </div>

        <div class="form-group">
            <label>موديل السيارة</label>
            <input type="text" name="model" required placeholder="أدخل موديل السيارة">
        </div>
    </div>

    <div class="grid-container">
        <div class="form-group">
            <label>سنة الصنع</label>
            <input type="number" name="year" required placeholder="أدخل سنة الصنع">
        </div>

        <div class="form-group">
            <label>السعر المطلوب</label>
            <input type="number" name="price" required placeholder="أدخل السعر  ">
        </div>
    </div>

    <div class="form-group">
        <label> تفاصيل الاعلان </label>
        <textarea name="des" required rows="4" placeholder="اكتب وصفاً  "></textarea>
    </div>

    <div class="form-group">
        <label>صور السيارة</label>
        <div class="file-upload-container">
            <input type="file" name="images[]" multiple accept="image/*" id="car-images">
            <label for="car-images" class="file-upload-label">
                <span>اضغط هنا لرفع الصور</span>
                <small>يمكنك اختيار عدة صور في نفس الوقت</small>
            </label>
        </div>
    </div>

    <button type="submit">
        إرسال الطلب
    </button>
</form>

    </div>

    <div style="height: 100px;"></div>
</body>

</html>