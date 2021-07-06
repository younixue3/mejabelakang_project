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
    .slick-dots {
        display: -webkit-flex;
        display: -moz-felx;
        display: -ms-flex;
        display: flex;
        justify-content: center;
        margin: 0;
        list-style: none;
        bottom: 40px;
    }
    .slick-dots li {
        border-radius: 50%;
    }
    .slick-dots button {
        display: block;
        width: 16px;
        height: 16px;
        padding: 0;
        border: none;
        background: #000;
        border-radius: 50%;
        text-indent: -9999999px;
    }
</style>

<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.your-class').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
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