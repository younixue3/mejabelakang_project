</div>
</div>
<div class="bg-gray-700 p-2 md:p-11 text-white text-left font-poppins bottom-0">
    <div class="md:float-left">
        <span class=" mr-1">Made with by ricko.tiaka</span>
    </div>
    <div class="md:float-right mx-auto md:mx-0">
        <button>
            <img class="w-7 h-7 mx-1" src="https://img.icons8.com/ios-filled/500/ffffff/facebook-new.png" />
        </button>
        <button>
            <img class="w-7 h-7 mx-1" src="https://img.icons8.com/material-outlined/480/ffffff/instagram-new--v1.png" />
        </button>
        <button>
            <img class="w-7 h-7 mx-1" src="https://img.icons8.com/material-outlined/480/ffffff/globe--v2.png" />
        </button>
    </div>
{{-- </div> --}}
{{-- </template> --}}
</div>
</body>

</html>

<style>
    html {
        scroll-behavior: smooth;
    }

</style>

{{-- RD Javascript --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ asset('js/myTinyMce.js') }}"></script>


{{-- JQuery --}}
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

{{-- Slick Js --}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    var openBar = document.getElementById('openBar');
    var closeBar = document.getElementById('closeBar');
    var mobileMenu = document.getElementById('mobile-menu');
    var menuProfileButton = document.getElementById('menuProfileButton');
    var menuProfile = document.getElementById('menuProfile');

    menuProfileButton.onclick = function () {
        if (menuProfile.classList.contains('hidden')) {
            menuProfile.classList.remove('hidden');
        } else {
            menuProfile.classList.add('hidden');
        }
    }

    openBar.onclick = function () {
        if (mobileMenu.classList.contains('md:w-80')) {
            mobileMenu.classList.remove('md:w-80');
            mobileMenu.classList.add('md:w-20');
            console.log('tampilin')
        } else {
            mobileMenu.classList.remove('md:w-20');
            mobileMenu.classList.add('md:w-80');
            console.log('hilangin')
        }
        if (mobileMenu.classList.contains('w-0')) {
            mobileMenu.classList.remove('w-0');
            mobileMenu.classList.add('w-full');
            mobileMenu.classList.remove('hidden');
            console.log('tampilin')
        } else {
            mobileMenu.classList.remove('w-full');
            mobileMenu.classList.add('w-0');
            mobileMenu.classList.add('hidden');
            console.log('hilangin')
        }
        // console.log(mobileMenu.classList == 'md:hidden');
    }

    closeBar.onclick = function () {
        if (mobileMenu.classList.contains('md:w-80')) {
            mobileMenu.classList.remove('md:w-80');
            mobileMenu.classList.add('md:w-20');
            console.log('tampilin')
        } else {
            mobileMenu.classList.remove('md:w-20');
            mobileMenu.classList.add('md:w-80');
            console.log('hilangin')
        }
        if (mobileMenu.classList.contains('w-0')) {
            mobileMenu.classList.remove('w-0');
            mobileMenu.classList.add('w-full');
            mobileMenu.classList.remove('hidden');
            console.log('tampilin')
        } else {
            mobileMenu.classList.remove('w-full');
            mobileMenu.classList.add('w-0');
            mobileMenu.classList.add('hidden');
            console.log('hilangin')
        }
    }

    $('.carousel_1st').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: '.next_1st',
        prevArrow: '.prev_1st'
    });
    $('.carousel_2nd').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        nextArrow: '.next_2nd',
        prevArrow: '.prev_2nd',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    // slidesToShow: 3,
                    // slidesToScroll: 3,
                    // infinite: true,
                    // dots: true,
                    nextArrow: '.next_2nd',
                    prevArrow: '.prev_2nd',
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: false
                }
            }
        ]
    });

</script>