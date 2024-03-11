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

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>
        @yield('title','GTS')
    </title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/storage/images/favicon.png">

    <!-- Stylesheet -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite([
    'resources/assets/vendor/bootstrap-select/bootstrap-select.min.css',
    'resources/assets/vendor/bootstrap-select/bootstrap-select.min.css',
    'resources/assets/vendor/owl-carousel/owl.carousel.css',
    'resources/assets/vendor/magnific-popup/magnific-popup.min.css',
    'resources/assets/vendor/animate/animate.css',
    'resources/assets/vendor/lightgallery/css/lightgallery.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/skin/skin-4.css',
    'resources/assets/vendor/switcher/switcher.css',
    'resources/assets/vendor/rangeslider/rangeslider.css',
    ])

</head>

<body id="bg">
    <div id="loading-area" class="loading-04">
        <div class="loading-inner">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>


    <div class="page-wraper">
        <!-- Header -->
        @include('layouts.header')
        <!-- Header End -->

        <div class="page-content bg-white">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('layouts.footer')
        <!-- Footer End -->

        <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>

    </div>
    <!-- JAVASCRIPT FILES ========================================= -->

    @vite([
    'resources/assets/js/jquery.min.js',
    'resources/assets/vendor/wow/wow.js',
    'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/vendor/owl-carousel/owl.carousel.js',
    'resources/assets/vendor/magnific-popup/magnific-popup.js',
    'resources/assets/vendor/counter/waypoints-min.js',
    'resources/assets/vendor/counter/counterup.min.js',
    'resources/assets/vendor/imagesloaded/imagesloaded.js',
    'resources/assets/vendor/masonry/masonry-4.2.2.js',
    'resources/assets/vendor/masonry/isotope.pkgd.min.js',
    'resources/assets/vendor/lightgallery/js/lightgallery-all.min.js',
    'resources/assets/vendor/bootstrap-select/bootstrap-select.min.js',
    'resources/assets/js/dz.carousel.js',
    'resources/assets/js/dz.ajax.js',
    'resources/assets/js/custom.js',
    'resources/assets/vendor/switcher/switcher.js',
    'resources/assets/vendor/rangeslider/rangeslider.js',
    ])
</body>
</html>

