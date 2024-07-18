<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="keywords" content="agency, bootstrap, business, construction agency, corporate agency, creative, digital agency, minimal, portfolio, professional, responsive, startup, web design agency, web design service, web development agency">
    <meta name="description" content="Samar - Creative Agency Bootstrap HTML Template is particularly designed for agency, business, corporate agency, creative, professional, digital agency Business Template">
    <meta property="og:title" content="Samar - Creative Agency Bootstrap HTML Template + RTL">
    <meta property="og:description" content="Samar - Creative Agency Bootstrap HTML Template is particularly designed for agency, business, corporate agency, creative, professional, digital agency Business Template">
    <meta property="og:image" content="https://samar.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>
        @yield('title','GTS')
    </title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/storage/images/favicon.PNG">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Stylesheet -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite([
        'resources/css/app.css', 
        'resources/assets/vendor/bootstrap-select/bootstrap-select.min.css',
        'resources/assets/vendor/owl-carousel/owl.carousel.css',
        'resources/assets/vendor/lightgallery/css/lightgallery.min.css',
        'resources/assets/vendor/animate/animate.css',
        'resources/assets/css/style.css',
        'resources/assets/css/skin/skin-4.css',
        'resources/assets/vendor/magnific-popup/magnific-popup.min.css',
        'resources/assets/vendor/rangeslider/rangeslider.css',
        'resources/assets/vendor/swiper/css/swiper.min.css',
        'resources/assets/css/otherStyle.css',
        'resources/assets/css/services.css',
        'resources/assets/css/video/videoCss/play-bouton.css',
    ])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>:is([id*='google_ads_iframe'],[id*='taboola-'],.taboolaHeight,.taboola-placeholder,#credential_picker_container,#credentials-picker-container,#credential_picker_iframe,[id*='google-one-tap-iframe'],#google-one-tap-popup-container,.google-one-tap-modal-div,#amp_floatingAdDiv,#ez-content-blocker-container) {display:none!important;min-height:0!important;height:0!important;}</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body id="bg" class="layout-light">
    <div id="loading-area" class=" loading-04">
        <div class="loading-inner">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>


    <div class="page-wraper">
        @php
        // On vérifie si la route existe et on la recupère afin de pourvoir utiliser la classe active tout en bas
        $routeName = request()->route();
        $route= $routeName ? $routeName->getName() : '';
        @endphp
        <!-- Header -->
        @include('layouts.header')
        <!-- Header End -->

        <div class="page-content bg-white">

            @yield('content')

        </div>

        <!-- Footer -->
        @include('layouts.footer')
        <!-- Footer End -->

        <button class="scrollIcon hidden col-sm-12 col-xs-12" type="button"> ›› </i></button>

    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite([
        'resources/js/app.js',
        'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/vendor/magnific-popup/magnific-popup.js',
        'resources/assets/vendor/counter/waypoints-min.js',
        'resources/assets/vendor/counter/counterup.min.js',
        'resources/assets/vendor/masonry/masonry-4.2.2.js',
        'resources/assets/vendor/lightgallery/js/lightgallery-all.min.js',
        'resources/assets/vendor/bootstrap-select/bootstrap-select.min.js',
        'resources/assets/vendor/masonry/isotope.pkgd.min.js',
        'resources/assets/js/dz.carousel.js',
        'resources/assets/js/custom.js',
        'resources/assets/vendor/rangeslider/rangeslider.js',
        'resources/assets/vendor/swiper/js/swiper.min.js',
        'resources/assets/vendor/owl-carousel/owl.carousel.js',
        'resources/assets/css/video/videoJs/popup.js',
        'resources/assets/js/services.js',
        'resources/assets/js/projects.js',
    ])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

