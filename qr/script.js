function domReady(fn) {
    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}

domReady(function () {
    let decodedText = '';

    function onScanSuccess(decodeText, decodeResult) {
        decodedText = decodeText;
        confirmAndRedirect(decodeText);
    }

    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);

    function confirmAndRedirect(text) {
        if (text) {
            if (confirm(" محتوي الرمز: " + text + ". هل تريد  الانتقال الي الرابط ؟؟")) {
                // تعريف نافذة التأكيد وعند النقر على موافق، سيتم النسخ والانتقال للصفحة
                copyToClipboard(text);
                window.location.href = text; // استبدل YOUR_PAYMENT_PAGE برابط الصفحة
            }
        } else {
            alert('لم يتم العثور على نص.');
        }
    }

    function copyToClipboard(text) {
        let input = document.createElement('input');
        document.body.appendChild(input);
        input.value = text;
        input.select();
        document.execCommand('copy');
        document.body.removeChild(input);
    }
});
