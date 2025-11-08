<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW" dir="rtl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords"
        content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>غسيل سيارات</title>
    <link rel="stylesheet" href="includes/css/style.css" media="screen">
    <link rel="stylesheet" href="includes/css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="includes/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="includes/js/main.js" defer=""></script>
    <meta name="generator" content="wash car">
    <link rel="icon" href="includes/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org", 
      "@type": "Organization",
      "name": "wash car kw"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="الرئيسية">
    <meta property="og:description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <meta property="og:type" content="website">

    <style>
        :root {
            --primary-color: #00b7ff;
            --secondary-color: #DB075E;
            --background-color: #f5f5f5;
            --text-color: #333;
            --border-radius: 15px;
            --spacing: 1rem;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing);
            padding: var(--spacing);
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: var(--spacing);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                var(--primary-color),
                var(--secondary-color)
            );
            animation: rotate 10s linear infinite;
            z-index: -2;
        }

        .card::after {
            content: '';
            position: absolute;
            inset: 5px;
            background: white;
            border-radius: calc(var(--border-radius) - 5px);
            z-index: -1;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .profile-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: var(--border-radius);
            margin-bottom: var(--spacing);
        }

        .user-info {
            width: 100%;
            text-align: center;
            margin-bottom: var(--spacing);
        }

        .user-info h3 {
            margin: 0;
            color: var(--text-color);
            font-size: 1.2rem;
            font-weight: 600;
        }

        .user-info p {
            margin: 0.5rem 0;
            color: var(--secondary-color);
            font-weight: 700;
            font-size: 1.1rem;
        }

        .status {
            color: #2ecc71;
            font-weight: 500;
            margin-bottom: var(--spacing);
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .container {
                grid-template-columns: 1fr;
            }
        }

        .search-results-title {
            text-align: center;
            color: var(--text-color);
            margin: 2rem 0;
            font-weight: 600;
        }

        .no-results {
            text-align: center;
            padding: 2rem;
        }

        .no-results h5 {
            color: var(--text-color);
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    @include('includes.fixedbar')
    @include('includes.header')

    <section>
        <h2 class="search-results-title">نتائج البحث</h2>

        <div class="tab-content" id="tab1">
            @if(!isset($res))
            <div class="no-results">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/b69efc49-361c-47de-8ae1-bdd59a6f0743/E33H8QuB17.json"
                    background="transparent" speed="1" style="width: 150px; height: 150px;" loop autoplay></dotlottie-player>
                <h5>لا توجد منتجات متاحة</h5>
            </div>
            @else
            <div class="container">
                @foreach($res as $result)
                    @php
                        if($result->imgs) {
                            $images = $result->imgs;
                            $firstImage = $images[0];
                        }
                        elseif ($result->image) {
                            $images = $result->image;
                            $firstImage = $images[0];
                        }
                        else {
                            $firstImage = 0;
                        }
                    @endphp

                    <div class="card" onclick="window.location.href='{{ route('Product-details',$result->id) }}';">
                        <img src="/storage/{{ $firstImage }}" alt="{{ $result->name }}" class="profile-img">
                        <div class="user-info">
                            <h3>{{ $result->name }}</h3>
                            <p>{{ $result->price }} د.ك</p>
                        </div>
                        <div class="status">متوفر</div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
</body>

</html>