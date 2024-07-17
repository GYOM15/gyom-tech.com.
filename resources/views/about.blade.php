@extends('layouts.gts')

@section('title', __('about.about') )

@section('content')


<!-- About us -->
<section class="content-inner about-wraper-1 title" style="background-image: url(/storage/images/background/bg15.png); background-size: contain; background-position: center right; background-repeat: no-repeat;">
    <div class="container" >
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary">{{ __('about.about_section') }}</h6>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 wow " data-aos="fade-right" data-aos-duration="1000">
                <div class="dz-media left">
                    <img src="/storage/images/about/about-section-img.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow " data-aos="fade-left" data-aos-duration="1000">
                <div class="section-head style-1">
                    <h2 class="title m-b20">{{ __('about.building_future') }}</h2>
                    <p>{{ __('about.description_1') }}</p>
                </div>
                <p>{{ __('about.description_2') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Etapes -->
<section class="content-inner-2 title bg-primary" style="background-image: url(/storage/images/background/bg22.png); background-size: cover;">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h2 class="title text-white">{{ __('about.development_steps') }}</h2>
        </div>
        <div class="row text-white about-wraper-3 wow ">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                    <div class="icon-bx-lg radius bg-white"> 
                        <a href="javascript:void(0);" class="icon-cell text-primary">
                            <i class="flaticon-sketch"></i>
                        </a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-title text-white m-b15">{{ __('about.analysis_phase') }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
                <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                    <div class="icon-bx-lg radius bg-white"> 
                        <a href="javascript:void(0);" class="icon-cell text-primary">
                            <i class="flaticon-coding"></i>
                        </a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-title text-white m-b15">{{ __('about.interactive_prototype') }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                <div class="icon-bx-wraper style-6 text-center m-b30 icon-up">
                    <div class="icon-bx-lg radius bg-white"> 
                        <a href="javascript:void(0);" class="icon-cell text-primary">
                            <i class="flaticon-startup"></i>
                        </a> 
                    </div>
                    <div class="icon-content">
                        <h5 class="dlab-title text-white m-b15">{{ __('about.development_phase') }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video -->
<section class="content-inner-2 wow" data-aos="fade-up" data-aos-duration="1000" id="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Bouton Play -->
                <div class="video-box">
                    <a href="javascript:void(0);">
                        <img src="/storage/images/video/team-img.jpg" alt="Video Play button">
                        <div class="play-btn" id="playBtn">
                            <i class="fa fa-play "></i>
                        </div>
                    </a>
                </div>

                <!-- Popup -->
                <div class="popup" id="videoPopup">
                    <div class="popup-content">
                        <span class="close-btn" id="closeBtn"><i class="bg-white fa-solid fa-xmark"></i></span>
                        <video class="popup-content-inner" controls id="videoPlayer">
                            <source src="/storage/images/video/olivier_best.mp4" type="video/mp4">
                            Votre navigateur ne prend pas en charge la lecture de vidéos.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team -->
<section class="content-inner-2 title" style="background-image: url(/storage/images/background/bg16.png); background-size: cover; background-position: top center; background-repeat: no-repeat;">
    <div class="container ">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary m-b15">team</h6>
            <h2 class="title">{{ __('about.meet_team') }}</h2>
        </div>
        <div class="container all_team" id="team">
            <div class="row gx-4 team">
                
                <div class="col-xl-3 col-md-6  mb-5 mt-5 carte-team" data-aos="zoom-in-right" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">{{ __('about.ezekiel_title') }}</h5>
                        <p>{{ __('about.ezekiel_desc_Angular') }} <span class="pipe">&</span> {{ __('about.ezekiel_desc_Ionic') }}</p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6  mb-5 mt-5 carte-team" data-aos="zoom-in" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">{{ __('about.aristide_title') }}</h5>
                        <p>{{ __('about.aristide_desc') }} </p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6  mb-5 mt-5 carte-team" data-aos="zoom-in-left" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">{{ __('about.sekou_title') }}</h5>
                        <p>{{ __('about.sekou_desc') }}</p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6  mb-5 mt-5 carte-team" data-aos="zoom-in-left" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">{{ __('about.guy_title') }}</h5>
                        <p>{{ __('about.guy_desc') }}</p>
                        <div class="t_list_i">
                            <a href="https://github.com/GYOM15"><i class="fa-brands fa-github"></i></a>
                            <i class="fa-brands fa-twitter"></i>
                            <a href="https://www.linkedin.com/in/guy-olivier-millimouno-68b87824b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>   
    </div>
</section>
<!-- End Team Section -->

<!-- Testemonials Section -->
@include('shared.testemonials')
<!-- End Testemonials Section -->

<!-- Clients Logo -->
@include('shared.clientLogo')

@endsection
