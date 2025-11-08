
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords"
        content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>wash carrent | تأجير  سيارة</title>
    <link rel="stylesheet" href="includes/css/style.css" media="screen">
    <link rel="stylesheet" href="includes/css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="includes/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="includes/js/main.js" defer=""></script>
    <meta name="generator" content="wash car">
    <link rel="icon" href="includes/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "wash car kw"
    }
  </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description"
        content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <meta property="og:type" content="website">


</head>

<body>
     @include('includes.fixedbar')

    <section>

        <h2 style="font-family: 'Tajawal', sans-serif; text-align: center; margin-top: 10px; color: rgb(73, 73, 73); margin-top: 25px;">
           استبدل نقاطك

        </h2>
        <!----------------------------------------------->

        

@php
    $query = request('query');
    $companies = App\Models\CoinsProduct
        ::where('price', '!=', 0)
        ->when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', '%' . $query . '%');
        })
        ->get();
@endphp

@if($companies->isNotEmpty())
    <div class="card-container">
        @foreach($companies as $company)
            <div class="card" onclick="window.location.href='{{ route('coinsBuyProduct', $company->id) }}';">
                <img src="/storage/{{ $company->image[0] }}" alt="Company Image" class="card-img">
                <p class="card-title">{{ $company->name }}</p>
                <p class="card-price">مقابل: {{ $company->price }} نقاط</p>
                <button class="card-status"> احصل عليه </button>
                <div style="height: 10px;"></div>
                <style>
                    
                </style>
            </div>
        @endforeach
    </div>
@else
    <center>
        
    <p>لا توجد نتائج مطابقة لبحثك.</p>
    </center>
@endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <style>
            .card-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 20px;
                margin-top: 20px;
            }

            .card {
                text-align: center;
                background-color: #0097db;
                width: calc(33.333% - 40px);
                /* يظهر 3 كروت في شاشة الكمبيوتر */
                height: 250px;
                border-radius: 20px;
                box-shadow: 0 0 10px 0 rgb(228, 225, 225);
                cursor: pointer;
                margin: 10px;
            }

            .card-img {
                display: block;
                margin: 10px auto 0 auto;
                width: 70px;
                height: 70px;
                border-radius: 10px;
            }

            .card-title,
            .card-price,
            .card-status {
                font-family: 'Tajawal', sans-serif;
                margin-bottom: 10px;
            }

            .card-status {
                        background-color: white;
                        border: none;
                        color: black;
                        padding: 10px 20px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                        border-radius: 12px;
                        transition: background-color 0.3s;
                        margin-bottom: 10px;
                    }
                    .card-status:hover {
                        background-color: #45a049;
                    }

            /* عرض 3 كروت في شاشة الكمبيوتر */
            @media (min-width: 992px) {
                .card {
                    width: calc(20% - 40px);
                    /* 33.333% من عرض الحاوية */
                }
            }

            /* عرض كارتين في شاشة الهاتف */
            @media (max-width: 991px) {
                .card {
                    width: calc(200px - 40px);
                    /* 50% من عرض الحاوية */
                }
            }





        
        </style>

                @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'تم شراء المنتج بنجاح !',
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