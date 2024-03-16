@extends('layouts.gts')

@section('title', __('A PROPOS') )

@section('content')

<!-- Banner  -->
<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr2.jpg);">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1>About Us 1</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us 1</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>
<!-- Banner End -->
        
<!-- About -->
<section class="content-inner-2">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary">Our Steps</h6>
            <h2 class="title">How It’s Work</h2>
        </div>
        <div class="row about-wraper-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
            <div class="col-md-4">
                <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                    <div class="icon-bx-lg radius bg-white"> 
                        <a href="javascript:void(0);" class="icon-cell text-primary">
                            <i class="flaticon-sketch"></i>
                        </a> 
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-title m-b15">Designing</h4>
                        <p>Suspendisse potenti. Pellentesque ornare mattis elit non fermentum. Mauris rhoncus efficitu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                    <div class="icon-bx-lg radius bg-white"> 
                        <a href="javascript:void(0);" class="icon-cell text-primary">
                            <i class="flaticon-vector"></i>
                        </a> 
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-title m-b15">Development</h4>
                        <p>Suspendisse potenti. Pellentesque ornare mattis elit non fermentum. Mauris rhoncus efficitu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                    <div class="icon-bx-lg radius bg-white"> 
                        <a href="javascript:void(0);" class="icon-cell text-primary">
                            <i class="flaticon-startup"></i>
                        </a> 
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-title m-b15">Launching</h4>
                        <p>Suspendisse potenti. Pellentesque ornare mattis elit non fermentum. Mauris rhoncus efficitu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About us -->
<section class="content-inner about-wraper-1" style="background-image: url(/storage/images/background/bg15.png); background-size: contain; background-position: center right; background-repeat: no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="dz-media left">
                    <img src="/storage/images/about/pic1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="section-head style-1">
                    <h6 class="sub-title text-primary m-b15">About Us</h6>
                    <h2 class="title m-b20">Build Your Business Website Better</h2>
                    <p>Proin laoreet leo vel enim gravida, at porttitor metus ultricies. Cras eu velit enim. Vivamus blandit, dolor ut aliquet rutrum, ex elit mattis sapien, non molestie felis neque et nulla. Sed euismod turpis id nibh suscipit semper. Pellentesque dapibus risus arcu.</p>
                </div>
                <ul class="list-check primary m-b0">
                    <li>Suspendisse ullamcorper mollis orci in facilisis.</li>
                    <li>Etiam orci magna, accumsan varius enim volutpat.</li>
                    <li>Donec fringilla velit risus, in imperdiet turpis euismod quis.</li>
                    <li>Aliquam pulvinar diam tempor erat pellentesque, accumsan mauri.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Counters -->
<section class="content-inner-3 bg-light" style="background-image: url(/storage/images/background/bg14.png); background-position: center; background-repeat: no-repeat;"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 m-b30">
                <div class="dlab-content-bx style-3 text-center">
                    <div class="icon-bx-sm radius"> 
                        <span class="icon-cell">
                            <i class="flaticon-smile"></i>
                        </span> 
                    </div>
                    <div class="icon-content">
                        <h2 class="m-b0 text-primary"><span class="counter m-r5">18</span>Ml</h2>
                        <span class="title">Satisfied Clients</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 m-b30">
                <div class="dlab-content-bx style-3 text-center">
                    <div class="icon-bx-sm radius"> 
                        <span class="icon-cell">
                            <i class="flaticon-line-chart"></i>
                        </span> 
                    </div>
                    <div class="icon-content">
                        <h2 class="m-b0 text-primary"><span class="counter m-r5">20</span>Ml</h2>
                        <span class="title">Project Completed</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 m-b30">
                <div class="dlab-content-bx style-3 text-center">
                    <div class="icon-bx-sm radius"> 
                        <span class="icon-cell">
                            <i class="flaticon-startup"></i>
                        </span> 
                    </div>
                    <div class="icon-content">
                        <h2 class="m-b0 text-primary"><span class="counter m-r5">30</span>Ml</h2>
                        <span class="title">Project Lunched</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 m-b30">
                <div class="dlab-content-bx style-3 text-center">
                    <div class="icon-bx-sm radius"> 
                        <span class="icon-cell">
                            <i class="flaticon-confetti"></i>
                        </span> 
                    </div>
                    <div class="icon-content">
                        <h2 class="m-b0 text-primary"><span class="counter m-r5">50</span></h2>
                        <span class="title">Years Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video -->
<section class="content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-bx style-1 overlay-black-light">
                    <img src="/storage/images/video/pic1.jpg" alt="">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=pyRjzvdOSHk" class="popup-youtube"><i class="flaticon-play"></i></a>
                        <h2 class="title">Watch US</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Testimonials -->
<section class="content-inner-2" style="background-image: url(/storage/images/background/bg17.png); background-size: contain; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary m-b15">Testimonial</h6>
            <h2 class="title">What Our Clients Say’s</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials-wraper-2">
                    <!-- Swiper -->
                    <div class="swiper-container testimonial-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-pic">
                                    <img src="/storage/images/testimonials/pic1.jpg" alt="">
                                    <div class="shape-bx"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-pic">
                                    <img src="/storage/images/testimonials/pic2.jpg" alt="">
                                    <div class="shape-bx"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-pic">
                                    <img src="/storage/images/testimonials/pic3.jpg" alt="">
                                    <div class="shape-bx"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container testimonial-content">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-4 quote-right">
                                    <div class="testimonial-text">
                                        <strong class="testimonial-name">Cak Dikin</strong> 
                                        <span class="testimonial-position text-primary m-b20">CEO & Founder </span>
                                        <p>Duis feugiat est tincidunt ligula maximus convallis. Aenean ultricies, mi non vestibulum auctor, erat tortor porttitor ipsum, nec dictum tortor sem eget nunc. Etiam sed facilisis erat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-4 quote-right">
                                    <div class="testimonial-text">
                                        <strong class="testimonial-name">Cak Dikin</strong> 
                                        <span class="testimonial-position text-primary m-b20">CEO & Founder </span>
                                        <p>Duis feugiat est tincidunt ligula maximus convallis. Aenean ultricies, mi non vestibulum auctor, erat tortor porttitor ipsum, nec dictum tortor sem eget nunc. Etiam sed facilisis erat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-4 quote-right">
                                    <div class="testimonial-text">
                                        <strong class="testimonial-name">Cak Dikin</strong> 
                                        <span class="testimonial-position text-primary m-b20">CEO & Founder </span>
                                        <p>Duis feugiat est tincidunt ligula maximus convallis. Aenean ultricies, mi non vestibulum auctor, erat tortor porttitor ipsum, nec dictum tortor sem eget nunc. Etiam sed facilisis erat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="content-inner-2" style="background-image: url(/storage/images/background/bg16.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary m-b15">Our Blog</h6>
            <h2 class="title">Latest News & Blog</h2>
        </div>
        <div class="blog-carousel2 owl-carousel owl-none">
            <div class="item">
                <div class="dlab-blog style-2 m-b10">
                    <div class="dlab-media rounded-md">
                        <a href="blog-details-1.html"><img src="/storage/images/blog/blog-grid/pic1.jpg" alt=""></a>
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title"><a href="blog-details-1.html">Maecenas maximus augue eget libero dictum.</a></h4>
                        <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p>
                        <div class="dlab-meta mb-0">
                            <ul>
                                <li class="post-date">25 March 2021</li>
                                <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="dlab-blog style-2 m-b10">
                    <div class="dlab-media rounded-md">
                        <a href="blog-details-1.html"><img src="/storage/images/blog/blog-grid/pic2.jpg" alt=""></a>
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title"><a href="blog-details-1.html">Maecenas maximus augue eget libero dictum.</a></h4>
                        <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p>
                        <div class="dlab-meta mb-0">
                            <ul>
                                <li class="post-date">28 June 2021</li>
                                <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="dlab-blog style-2 m-b10">
                    <div class="dlab-media rounded-md">
                        <a href="blog-details-1.html"><img src="/storage/images/blog/blog-grid/pic3.jpg" alt=""></a>
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title"><a href="blog-details-1.html">Maecenas maximus augue eget libero dictum.</a></h4>
                        <p class="m-b20">Nunc convallis sagittis dui eu dictum. Cras sodales id ipsum ac aliquam. Phasellus justo quam.</p>
                        <div class="dlab-meta mb-0">
                            <ul>
                                <li class="post-date">28 June 2021</li>
                                <li class="post-author"><i class="las la-user-circle"></i> By <a href="javascript:void(0);">Johne Doe</a></li>
                                <li class="post-comment"><i class="las la-comment"></i> <a href="javascript:void(0);">Comments<span>15</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients Logo -->
<div class="content-inner-3">
    <div class="container">
        <div class="clients-carousel owl-none owl-carousel style-2">
            <div class="item">
                <div class="clients-logo">
                    <img class="logo-main" src="/storage/images/logo/logo-pink1.png" alt="">
                    <img class="logo-hover" src="/storage/images/logo/logo-light1.png" alt="">
                </div>
            </div>
            <div class="item">
                <div class="clients-logo">
                    <img class="logo-main" src="/storage/images/logo/logo-pink2.png" alt="">
                    <img class="logo-hover" src="/storage/images/logo/logo-light2.png" alt="">
                </div>
            </div>
            <div class="item">
                <div class="clients-logo">
                    <img class="logo-main" src="/storage/images/logo/logo-pink3.png" alt="">
                    <img class="logo-hover" src="/storage/images/logo/logo-light3.png" alt="">
                </div>
            </div>
            <div class="item">
                <div class="clients-logo">
                    <img class="logo-main" src="/storage/images/logo/logo-pink4.png" alt="">
                    <img class="logo-hover" src="/storage/images/logo/logo-light4.png" alt="">
                </div>
            </div>
            <div class="item">
                <div class="clients-logo">
                    <img class="logo-main" src="/storage/images/logo/logo-pink5.png" alt="">
                    <img class="logo-hover" src="/storage/images/logo/logo-light5.png" alt="">
                </div>
            </div>
            <div class="item">
                <div class="clients-logo">
                    <img class="logo-main" src="/storage/images/logo/logo-pink6.png" alt="">
                    <img class="logo-hover" src="/storage/images/logo/logo-light6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
