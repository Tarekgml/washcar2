function showOverlay() {
  var overlay = document.getElementById('overlay');
  overlay.style.display = 'flex';
  setTimeout(function(){
    overlay.style.backgroundColor = 'rgba(255, 255, 255, 0)'; // تغيير لون الطبقة إلى شفافية
    setTimeout(function(){
      overlay.style.display = 'none';
      overlay.style.backgroundColor = 'rgba(255, 255, 255, 0.7)'; // استعادة لون الطبقة الأصلي
    }, 500); // تأخير إخفاء الطبقة لنصف ثانية
  }, 5000); // تأخير ظهور الطبقة لمدة 5 ثواني
}


/******************************************/
document.addEventListener("DOMContentLoaded", function() {
    // التأخير قبل بدء التغيير
    setTimeout(function() {
        var overlay = document.getElementById("overlaymain");
        overlay.style.opacity = "0"; // تغيير الشفافية إلى صفر
        // انتظار انتهاء التأثير ثم إخفاء الطبقة
        setTimeout(function() {
            overlay.style.display = "none";
        }, 1000); // 1000 ميلي ثانية تعادل 1 ثانية
    }, 1000); // 5000 ميلي ثانية تعادل 5 ثوانٍ
});
