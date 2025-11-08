
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
    <meta name="description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <title>الطلبات الجديدة</title>

    <meta name="generator" content="wash car">
    <link rel="icon" href="../includes/images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800|Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Cairo:200,300,400,500,600,700,800,900">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "wash car kw"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="orders-home">
    <meta property="og:description" content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<style>
  body {

    text-align: right;
    font-family: 'Almarai', sans-serif;
  }
  
  .best-match-section {
      width: 350px;
      margin: 0 auto;
  }
  
  .best-match-section h2 {
      margin-bottom: 15px;
      font-size: 1.5rem;
      color: #333;
  }
  
  .product-card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      margin-bottom: 15px;
      width: 450px;
      font-family: 'Almarai', sans-serif;
  }
  
  .product-details {
      max-width: 60%;
      font-family: 'Almarai', sans-serif;
  }
  
  .product-details .rating {
      font-size: 0.9rem;
      color: #888;
  }
  
  .product-details .rating span {
      color: #f39c12;
      font-weight: bold;
  }
  
  .product-details h3 {
      font-size: 1.2rem;
      margin: 5px 0;
      color: #333;
  }
  
  .product-details .calories {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 10px;
  }
  
  .add-btn {
      background-color: #273c75;
      color: #fff;
      border: none;
      padding: 8px 12px;
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Almarai', sans-serif;
  }
  
  .add-btn:hover {
      background-color: #192a56;
  }
  
  .product-image img {
      width: 70px;
      height: auto;
      border-radius: 10px;
  }

  .button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 20px;
    background-color: #7808d0;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    font-family: 'Almarai', sans-serif;
  }

  .button:hover {
    background-color: #5a06a0;
  }

  .button__icon-wrapper {
    display: flex;
    margin-left: 8px;
  }

  .button__icon-svg {
    width: 16px;
    height: 16px;
    
  }
</style>  
</head>

<body class="u-body u-xl-mode" data-lang="ar">
    @include('company-account.includes.fixedbar')
    <!-------------------------------------------------------------->
    <h2 style="text-align: center; font-family: Almarai; font-weight: bold; font-size: 28px; margin-top: 20px;">الطلبات الجديدة</h2>
    @php
    $appointemnts = \App\Models\Appointment::where('company_id', auth()->user()->id)
    ->whereIn('status', ['pending', 'جاري الغسيل'])
    ->get();
    @endphp
    @if($appointemnts->isEmpty())
    <section class="u-clearfix u-section-2" id="sec-0489">
        <center>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

            <dotlottie-player src="https://lottie.host/37d6d68d-fcbd-4d91-a663-f01757401842/qnHJFQOkrN.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        </center>
        <h5 style="text-align: center; font-weight: bold; font-size: 20px; color: #333; font-family: Almarai;">لا يوجد طلبات حاليا , تحقق من اعداداتك</h5>
        <center>
            <br><br>
        <a class="button" href="{{ route('company_setting') }}" style="font-family: Almarai; margin-top: 50px;">
            <span class="button__icon-wrapper">
                <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                </svg>

                <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                </svg>
            </span>
            <span style="font-family: Almarai;">عرض اعداداتك</span>
        </a>
        </center>
    </section>

    
    @else
    @foreach($appointemnts as $app)
  
    
        <div class="best-match-section" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
      <div class="product-card" style="max-width: 600px; width: 100%; margin: 20px auto;">
          <div class="product-details">
              <p class="rating" style="direction: rtl;">صاحب الطلب : {{ \App\Models\User::find($app->user_id)->name }}<!--<span>طلب جديد</span>--></p>
               <p class="rating" style="direction: rtl;"> {{ auth()->user()->price }} د.ك</span></p>

               <p class="rating" style="direction: rtl; color: #008CBA;"> نوع الغسيل: {{ $app->car_type ?? 'غير محدد' }}</span></p>

               <p class="rating" style="direction: rtl; color: #008CBA;">الموقع: {{ \App\Models\User::find($app->user_id)->address }}</span></p>  

               <p class="rating" style="direction: rtl; color: #008CBA;">رقم الهاتف: {{ \App\Models\User::find($app->user_id)->phone }}</p>     




              @php
              $daysTranslation = [
              'monday' => 'الإثنين',
              'tuesday' => 'الثلاثاء',
              'wednesday' => 'الأربعاء',
              'thursday' => 'الخميس',
              'friday' => 'الجمعة',
              'saturday' => 'السبت',
              'sunday' => 'الأحد',
              ];
              @endphp
              <h3> {{ $daysTranslation[$app->day] ?? $app->day }} {{ $app->time }} </h3>
              <p class="calories">{{ $app->notes ? $app->notes : 'لا توجد ملاحظات' }}</p>

              <button class="add-btn" onclick="status({{ $app->id }})">عرض الحالة</button>
              @if(!$app->meet_link)
              <button class="add-btn" onclick="link({{ $app->id }})" style="margin-top: 10px;">البث </button>
              @endif
          </div>
          <div class="product-image">
              @php
    $user = \App\Models\User::find($app->user_id);
    $carImg = $user && $user->car_img ? "/storage/{$user->car_img}" : "/includes/images/c9df64b29a90930daae07d4a9f80e2cb0068382e0c4ea27b2a08c1392ef4e4c97fb29a9767f28f1d2aa04a8f540423c9f55acd41546326e81c10f3_1280.jpg";
@endphp

<img src="{{ $carImg }}" alt="صورة السيارة">

          </div>
      </div>
      @endforeach
      @endif
    
    </div>
    <!-------------------------------------------------------------->


               

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 

        function status(appointmentId) {
            swal({
                title: "تغيير الحالة",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
              <form id="statusForm" action="{{ route('change-appointment-status') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="${appointmentId}">
                <select name="status" class="swal-content__input">
                  <option value="مكتمل">مكتمل</option>
                  <option value="مرفوض">مرفوض</option>
                  <option value="جاري الغسيل">جاري الغسيل</option>
                </select>
              </form>
            `
                    }
                },
                buttons: {
                    confirm: {
                        text: "موافق",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    }
                }
            }).then((willSubmit) => {
                if (willSubmit) {
                    document.getElementById('statusForm').submit();
                }
            });
        }

        function link(id) {
            swal({
                title: "ادخل كود البث المباشر",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
              <form id="meetForm" action="{{ route('appointment.meet') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="${id}">
                <input type="text" name="meet_link" class="swal-content__input" placeholder="ادخل كود البث المباشر من تطبيق Google Meet">
                <button type="button" class="help-button" onclick="showHelp()">كيفية الحصول على الكود</button>
              </form>
            `
                    },
                },
                buttons: {
                    confirm: {
                        text: "موافق",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    }
                }
            }).then((willSubmit) => {
                if (willSubmit) {
                    document.getElementById('meetForm').submit();
                }
            });
        };

        function showHelp() {
            swal({
                title: "كيفية الحصول على كود الجلسة",
                text: "يمكنك الحصول على كود الجلسة من تطبيق Google Meet من خلال فتح الجلسة ونسخ الكود المكون من عشرة أحرف وأرقام.",
                icon: "info",
                button: "موافق"
            });
        }
    </script>
    <style>
        .swal-modal {
            border-radius: 25px !important;
        }
        .swal-title {
            font-size: 24px;
            color: #333;
            font-family: Almarai;
        }
        .swal-text {
            font-size: 18px;
            color: #666;
            font-family: Almarai;
            text-align: right;
        }
        .swal-button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            font-family: Almarai;
            border-radius: 25px;
        }
        .swal-content__input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
            font-family: Almarai;
            text-align: right;
        }
        .swal-content div {
            text-align: right;
            font-family: Almarai;
            direction: rtl;
        }
        .help-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 15px;
            font-family: Almarai;
        }
    </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
<script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
<script>
    setInterval(function() {
        iziToast.info({
            title: 'جاري التحقق من الطلبات الجديدة',
            position: 'topRight',
            timeout: 5000,
            rtl: true,
            fontFamily: 'Almarai'
        });
        setTimeout(function() {
            location.reload();
        }, 5000);
    }, 60000);
</script>
</body>

</html>