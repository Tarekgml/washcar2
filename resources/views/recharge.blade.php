<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-KW">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="keywords"
    content="غسيل سيارات، تنظيف سيارات، تلميع سيارات، خدمات سيارات، تطبيق غسيل، حجز موعد، غسيل خارجي، غسيل داخلي، غسيل متنقل، غسيل السيارات بالكويت، خدمات تنظيف، دفع إلكتروني، تتبع الطلب، صيانة سيارات، تنظيف مركبات، تلميع خارجي، تلميع داخلي، خدمات متنقلة، غسيل سريع، مواعيد غسيل">
  <meta name="description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <title>إعادة شحن المحفظة</title>
  <link rel="stylesheet" href="includes/css/style.css" media="screen">
  <link rel="stylesheet" href="includes/css/recharge.css" media="screen">
  <script class="u-script" type="text/javascript" src="includes/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="includes/js/main.js" defer=""></script>
  <meta name="generator" content="wash car">
  <link rel="icon" href="includes/images/favicon.png">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700;800&display=swap" rel="stylesheet">
  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "wash car kw"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="recharge">
  <meta property="og:description"
    content="موقع وتطبيق غسل السيارات في الكويت يقدم خدمات تنظيف شاملة للمركبات بمختلف أنواعها، بما في ذلك الغسيل الخارجي، الداخلي، والتلميع. يتميز بسهولة الاستخدام، حيث يمكن للمستخدمين حجز مواعيد، اختيار الخدمات المطلوبة، والدفع إلكترونيًا. يتيح التطبيق تتبع حالة الطلب ويوفر خدمات مريحة وموثوقة تلبي احتياجات العملاء.">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="ar">
@include('includes.fixedbar')

  <section class="container forms">
    <div class="form login">
      <div class="form-content">

        <center>
          <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
            type="module"></script>

          <dotlottie-player src="https://lottie.host/9792e422-2a70-4846-8546-0667a71d3672/tifLopnxbY.json"
            background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        </center>

        <header style="font-family: Tajawal; font-size: 16px;">إعادة شحن المحفظة</header>
        <form action="" method='POST'>
          <div class="field input-field">
            <input name='' type="number" placeholder="المبلغ" class="input" required style="font-family: Tajawal; direction: rtl;">
          </div>

          <!-- حقل القائمة المنسدلة لطرق الدفع -->
          <div class="field input-field">
            <input type="text" id="paymentMethodInput" readonly placeholder="اختر طريقة الدفع" style="direction: rtl; font-family: Tajawal; cursor: pointer;">
          </div>
          <div id="paymentMethodMenu" class="payment-method-container" style="display: none; position: fixed; bottom: 0; left: 0; right: 0; background-color: white; border-top: 1px solid #ccc; padding: 15px; z-index: 10000;">
            <div class="payment-option" id="applePayOption">
              <div class="circle-checkmark"></div>
              <label for="apple_pay">
               <img src="apay.png" alt="apple_pay" style="width: auto; height: 20px;"> آبل باي
              </label>
              <input type="radio" id="apple_pay" name="payment_method" value="apple_pay">
            </div>
            <div class="payment-option" id="knetOption">
              <div class="circle-checkmark"></div>
              <label for="knet">
                <img src="knet.png" alt="knet" style="width: auto; height: 20px;"> كي نت
              </label>
              <input type="radio" id="knet" name="payment_method" value="knet">
            </div>
            <div class="payment-option" id="visaOption">
              <div class="circle-checkmark"></div>
              <label for="visa_mastercard">
                <img src="visa.png" alt="Visa" style="width: auto; height: 20px;"> فيزا / ماستركارد
              </label>
              <input type="radio" id="visa_mastercard" name="payment_method" value="visa_mastercard">
            </div>
            <div class="payment-option" id="visaOption">
              <div class="circle-checkmark"></div>
              <label for="visa_mastercard">
                <img src="ww.png" alt="Visa" style="width: auto; height: 20px;"> ومض | 51525911
              </label>
              <input type="radio" id="visa_mastercard" name="payment_method" value="visa_mastercard">
            </div>
            
            <div style="height: 30px;"></div>
            <button type="button" id="closePaymentMenu">تآكيد</button>
          </div>

          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const paymentMethodInput = document.getElementById('paymentMethodInput');
              const paymentMethodMenu = document.getElementById('paymentMethodMenu');
              const closePaymentMenu = document.getElementById('closePaymentMenu');
              const paymentOptions = document.querySelectorAll('.payment-option');
              const radioInputs = document.querySelectorAll('input[name="payment_method"]');

              paymentMethodInput.addEventListener('click', function() {
                paymentMethodMenu.style.display = 'block';
              });

              radioInputs.forEach(function(radio) {
                radio.addEventListener('change', function() {
                  paymentMethodInput.value = this.parentElement.querySelector('label').textContent.trim();
                  paymentMethodMenu.style.display = 'none';
                });
              });

              paymentOptions.forEach(option => {
                option.addEventListener('click', function() {
                  paymentOptions.forEach(item => item.classList.remove('active'));
                  this.classList.add('active');
                  this.querySelector('input').checked = true;
                  this.querySelector('input').dispatchEvent(new Event('change'));
                });
              });

              closePaymentMenu.addEventListener('click', function() {
                paymentMethodMenu.style.display = 'none';
              });
            });
          </script>

          <div class="field button-field">
            <button type="submit" style="font-family: Tajawal; background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">شحن المحفظة</button>
          </div>
        </form>

      </div>
  </section>
<div style="height: 100px;"></div>
  <style>
    /* General styles for the payment method container */
    .payment-method-container {
      display: flex;
      flex-direction: column;
      font-family: 'Tajawal', sans-serif;
      gap: 1rem;
      margin-top: 20px;
      direction: rtl;
    }

    /* Style for each option */
    .payment-option {
      display: flex;
      align-items: center;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      font-family: 'Tajawal', sans-serif;
      /* margin:5px; */
      margin-bottom: 10px;
    }

    .payment-option:hover {
      background-color: #f5f5f5;
    }

    /* Style for the radio button to hide the default appearance */
    .payment-option input[type="radio"] {
      display: none;
    }

    /* Style the label text */
    .payment-option label {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1rem;
      margin-right: 5px;
      font-family: 'Tajawal', sans-serif;
    }

    /* Style for the icons (Apple Pay, Visa, etc.) */
    .payment-option i {
      font-size: 1.5rem;
      color: #333;
    }

    /* Style for the active/selected state */
    .payment-option.active {
      background-color: #e0f7fa;
      border-color: #007bff;
    }

    /* Style for the circular checkmark */
    .payment-option .circle-checkmark {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 2px solid #ddd;
      display: inline-block;
      margin-right: 10px;
      position: relative;
    }

    /* When selected, display the blue fill in the circle */
    .payment-option.active .circle-checkmark {
      background-color: #007bff;
      border-color: #007bff;
    }

    /* Blue checkmark inside the circle */
    .payment-option.active .circle-checkmark::after {
      content: "";
      width: 10px;
      height: 10px;
      background-color: white;
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    #closePaymentMenu{
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
      width: 100%;
    }
  </style>
</body>

</html>
