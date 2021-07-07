        <div class="bg-gray-700 p-11 text-white text-left font-poppins">
                <div class="float-left flex">
                    <span class=" mr-1">Made with by ricko.tiaka</span>
                </div>
                <div class="float-right flex">
                    <button>
                        <img class="w-7 h-7 mx-1" src="https://img.icons8.com/ios-filled/500/ffffff/facebook-new.png"/>
                    </button>
                    <button>
                        <img class="w-7 h-7 mx-1" src="https://img.icons8.com/material-outlined/480/ffffff/instagram-new--v1.png"/>
                    </button>
                    <button>
                        <img class="w-7 h-7 mx-1" src="https://img.icons8.com/material-outlined/480/ffffff/globe--v2.png"/>
                    </button>
                </div>
        </div>
    </body>
</html>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
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
        responsive: [
    {
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
    } ]
    });
  </script>
{{-- <script>
    var thumbnails = document.getElementsByClassName('carousel-thumb');
    var carousel = new Carousel({
        panels: document.getElementsByClassName('carousel-image'),
        thumbnails: thumbnails,
        panelActiveClass: 'carousel-image-active'
    });
    // show second thumbnail on load
    carousel.goTo(1);

</script> --}}

{{-- Font Awesome Script --}}
<script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>