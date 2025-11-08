<!---========================================================================-------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
<div class="bottom-bar" style="position: fixed; bottom: 0; width: 100%; background-color: #fff; box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); display: flex; justify-content: center; padding: 10px 0; z-index: 9999; border-radius: 25px; margin-bottom: 3spx;">
    <a href="{{route('profile')}}" style="text-decoration: none; color: inherit; width: 250px; display: flex; flex-direction: column; align-items: center;">
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="6" r="4" stroke="#1C274C" stroke-width="1.5" />
            <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span style="font-family: cairo; font-size: 12px; font-weight: bold;"> حسابي</span>
    </a>
    <a href="{{ route('orders.view') }}" style="text-decoration: none; color: inherit; width: 250px; display: flex; flex-direction: column; align-items: center;">
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#1C274C" stroke-width="1.5" />
            <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#1C274C" stroke-width="1.5" />
            <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span style="font-family: cairo; font-size: 12px; font-weight: bold;">الطلبات</span>
    </a>
    <a href="{{ route('categories') }}" style="text-decoration: none; color: inherit; width: 250px; display: flex; flex-direction: column; align-items: center;">
        <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <g id="Grid_4-2">
                <g>
                    <g>
                        <path d="M8.5,13.933H5.563a2.5,2.5,0,0,1-2.5-2.5V5.563a2.5,2.5,0,0,1,2.5-2.5H8.5a2.5,2.5,0,0,1,2.5,2.5v5.87A2.5,2.5,0,0,1,8.5,13.933ZM5.563,4.063a1.5,1.5,0,0,0-1.5,1.5v5.87a1.5,1.5,0,0,0,1.5,1.5H8.5a1.5,1.5,0,0,0,1.5-1.5V5.563a1.5,1.5,0,0,0-1.5-1.5Z" />
                        <path d="M8.5,20.935H5.564a2.5,2.5,0,0,1,0-5H8.5a2.5,2.5,0,1,1,0,5Zm-2.934-4a1.5,1.5,0,0,0,0,3H8.5a1.5,1.5,0,1,0,0-3Z" />
                    </g>
                    <g>
                        <path d="M18.436,20.935H15.5a2.5,2.5,0,0,1-2.5-2.5v-5.87a2.5,2.5,0,0,1,2.5-2.5h2.934a2.5,2.5,0,0,1,2.5,2.5v5.87A2.5,2.5,0,0,1,18.436,20.935ZM15.5,11.065a1.5,1.5,0,0,0-1.5,1.5v5.87a1.5,1.5,0,0,0,1.5,1.5h2.934a1.5,1.5,0,0,0,1.5-1.5v-5.87a1.5,1.5,0,0,0-1.5-1.5Z" />
                        <path d="M18.436,8.063H15.5a2.5,2.5,0,0,1,0-5h2.934a2.5,2.5,0,0,1,0,5Zm-2.934-4a1.5,1.5,0,0,0,0,3h2.934a1.5,1.5,0,0,0,0-3Z" />
                    </g>
                </g>
            </g>
        </svg>
        <span style="font-family: cairo; font-size: 12px; font-weight: bold;">الأقسام</span>
    </a>
    <a href="/" style="text-decoration: none; color: inherit; width: 250px; display: flex; flex-direction: column; align-items: center;">
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g fill="currentColor" id="SVGRepo_bgCarrier" stroke-width="0" />
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
            <g id="SVGRepo_iconCarrier">
                <path d="M9 16C9.85038 16.6303 10.8846 17 12 17C13.1154 17 14.1496 16.6303 15 16" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" />
                                                        <path d="M22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274" stroke="#000000" stroke-width="1.5" stroke-linecap="round" />

            </g>
        </svg>
        <span style="font-family: cairo; font-size: 12px; font-weight: bold;">الرئيسية</span>
    </a>
</div>

<script>
    // Function to get the saved language preference from localStorage
    function getSavedLanguagePreference() {
        return localStorage.getItem('preferredLanguage') || 'ar'; // Default to 'ar'
    }

    // Function to save the language preference in localStorage
    function saveLanguagePreference(language) {
        localStorage.setItem('preferredLanguage', language);
    }

    // Function to translate the page content based on language
    function translatePage(language) {
        if (language === 'en') {  // Only run translation if language is English
            const elements = document.querySelectorAll('body *:not(#language-select):not(#language-select *)');
            elements.forEach(element => {
                if (element.childNodes.length === 1 && element.childNodes[0].nodeType === 3) {
                    const text = element.innerText;
                    const langPair = 'ar|en'; // Translate from Arabic to English
                    fetch(`https://api.mymemory.translated.net/get?q=${text}&langpair=${langPair}`)
                        .then(response => response.json())
                        .then(data => {
                            element.innerText = data.responseData.translatedText;
                        });
                }
            });
        }
    }

    // Apply the saved language preference on page load, only run if not Arabic
    document.addEventListener('DOMContentLoaded', function () {
        const savedLanguage = getSavedLanguagePreference();
        if (savedLanguage === 'en') {  // Only translate if the saved language is English
            translatePage(savedLanguage);
        }
        // If it's Arabic, do nothing, as the site is already in Arabic.
    });
</script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '',
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
    