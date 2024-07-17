@extends('layouts.gts')

@section('title', __('ACCUEIL'))

@section('content')
            <!-- Slider -->
            <div class="banner-four" style="background-image: url(/storage/images/main-slider/slider4/background2.png); background-size: cover; background-repeat: no-repeat; ">
                <div class="container banner-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-md-7" data-aos="fade-right" data-aos-duration="1000">
                            <div class="banner-content ">
                                <h6 data--delay="0.5s" data--duration="3s" class=" fadeInUp sub-title pb-1 text-yellow">{{ __('home.digital_excellence') }}</h6>
                                <h1 data--delay="1s" data--duration="3s" class=" fadeInUp title m-b15">{{ __('home.create_future') }}</h1>
                                <p data--delay="1.5s" data--duration="3s" class=" fadeInUp description m-b20 pt-2">
                                    {{ __('home.integrated_approach') }}</p>
                                <ul class="m-b30">
                                    <li class=" fadeInUp" data--delay="1.5s"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9" cy="9" r="6" fill="currentColor" />
                                            <circle cx="9" cy="9" r="7.5" stroke="currentColor" stroke-opacity="0.3" stroke-width="3" />
                                        </svg>
                                        {{ __('home.cross_platform') }}
                                    </li>
                                    <li class=" fadeInUp" data--delay="1.5s"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9" cy="9" r="6" fill="currentColor" />
                                            <circle cx="9" cy="9" r="7.5" stroke="currentColor" stroke-opacity="0.3" stroke-width="3" />
                                        </svg>
                                        {{ __('home.ai_modeling') }}
                                    </li>
                                </ul>

                                <a data--delay="2s" data--duration="3s" href="{{route('about')}}" class=" fadeInUp btn btn-primary">{{ __('home.learn_more') }}</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-5" data-aos="fade-left" data-aos-duration="1000">
                            <div class="dz-media  fadeIn" data--delay="1s" data--duration="3s">
                                <svg width="679" height="680" viewBox="0 0 679 680" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_16_993)">
                                        <path d="M169.962 120.407C185.63 60.8492 259.895 40.5862 303.64 83.9334L590.514 368.2C634.259 411.548 614.674 485.995 555.262 502.205L165.643 608.512C106.23 624.722 51.5496 570.538 67.217 510.98L169.962 120.407Z" fill="currentColor" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_16_993" x="0.501526" y="0.708908" width="677.75" height="678.711" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="4" />
                                            <feGaussianBlur stdDeviation="32" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix" values="0 0 0 0 0.45098 0 0 0 0 0.333333 0 0 0 0 0.968627 0 0 0 0.4 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_16_993" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_16_993" result="shape" />
                                        </filter>
                                        <linearGradient id="paint0_linear_16_993" x1="205.214" y1="-13.5979" x2="412.198" y2="745.011" gradientUnits="userSpaceOnUse">
                                            <stop offset="1" stop-color="#7355F7" />
                                            <stop offset="1" stop-color="#1A008A" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <!-- <img src="/storage/images/main-slider/slider4/.png" alt=""> -->

                                <ul>
                                    <li><img src="/storage/images/main-slider/slider4/pic3.png" class=" zoomIn" data--delay="2.2s" alt=""></li>
                                    <li><img src="/storage/images/main-slider/slider4/pic2.png" class=" zoomIn" data--delay="1.6s" alt=""></li>
                                    <li><img src="/storage/images/main-slider/slider4/pic1.png" class=" zoomIn" data--delay="0.8s" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <section class="content-inner bg-white" style="background-image: url(/storage/images/background/bg20.png); background-size: cover;" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <div class="section-head style-4 text-center">
                        <h6 class="sub-title">Services</h6>
                        <h2 class="title">{{ __('home.services') }} </h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6  fadeInUp" data-aos="fade-left" data-aos-duration="1000">
                            <div class="icon-bx-wraper style-10 box-hover text-center m-b30 active show">
                                <div class="icon-bx">
                                    <svg viewBox="0 0 114 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M114 70.3999C114 101.88 88.4802 127.4 57 127.4C25.5198 127.4 0 101.88 0 70.3999C1.82688e-05 19.8999 41 -15.6001 50.4737 6.8999C70.4737 54.3999 114 28.9 114 70.3999Z" fill="currentColor" />
                                    </svg>
                                    <span class="icon-cell">
                                        <i class="fa-solid fa-brain"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title m-b15">{{ __('home.ai') }} <br>{{ __('home.modeling') }}</h4>
                                    <p class="m-b20">{{ __('home.ai_modeling_description') }}</p>
                                    <a href="services-details-3.html" class="btn "><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6  fadeInUp" data-aos="fade-left" data-aos-duration="800">
                            <div class="icon-bx-wraper style-10 box-hover text-center m-b30">
                                <div class="icon-bx">
                                    <svg viewBox="0 0 114 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M114 70.3999C114 101.88 88.4802 127.4 57 127.4C25.5198 127.4 0 101.88 0 70.3999C1.82688e-05 19.8999 41 -15.6001 50.4737 6.8999C70.4737 54.3999 114 28.9 114 70.3999Z" fill="currentColor" />
                                    </svg>
                                    <span class="icon-cell">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title m-b15">{{ __('home.mobile_development') }}</h4>
                                    <p class="m-b20">{{ __('home.mobile_development_description') }}</p>
                                    <a href="services-details-3.html" class="btn"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6  fadeInUp" data-aos="fade-left" data-aos-duration="700">
                            <div class="icon-bx-wraper style-10 box-hover text-center m-b30">
                                <div class="icon-bx">
                                    <svg viewBox="0 0 114 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M114 70.3999C114 101.88 88.4802 127.4 57 127.4C25.5198 127.4 0 101.88 0 70.3999C1.82688e-05 19.8999 41 -15.6001 50.4737 6.8999C70.4737 54.3999 114 28.9 114 70.3999Z" fill="currentColor" />
                                    </svg>
                                    <span class="icon-cell">
                                        <i class="flaticon-boost-1"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title m-b15">{{ __('home.software_web_solutions') }}</h4>
                                    <p class="m-b20">{{ __('home.software_web_solutions_description') }}</p>
                                    <a href="services-details-3.html" class="btn"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6  fadeInUp" data-aos="fade-left" data-aos-duration="600">
                            <div class="icon-bx-wraper style-10 box-hover text-center m-b30">
                                <div class="icon-bx">
                                    <svg viewBox="0 0 114 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M114 70.3999C114 101.88 88.4802 127.4 57 127.4C25.5198 127.4 0 101.88 0 70.3999C1.82688e-05 19.8999 41 -15.6001 50.4737 6.8999C70.4737 54.3999 114 28.9 114 70.3999Z" fill="currentColor" />
                                    </svg>
                                    <span class="icon-cell">
                                        <i class="fa-solid fa-database"></i>
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title m-b15">{{ __('home.database_modeling') }}</h4>
                                    <p class="m-b20">{{ __('home.database_modeling_description') }}</p>
                                    <a href="services-details-3.html" class="btn"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Counter -->
            <section class="content-inner bg-primary" style="background-image: url(/storage/images/background/bg22.png); background-size: cover;" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <div class="section-head style-4 text-center  fadeInUp" data--duration="2s" data--delay="0.1s">
                        <h2 class="title text-white">{{ __('home.help_achieve_goals_1') }}<br>{{ __('home.help_achieve_goals_2') }}</h2>
                    </div>
                    <div class="video-bx style-4 m-b40  fadeInUp" data--duration="2s" data--delay="0.2s">
                        <div class="video-btn">
                            <a href="{{ route('about') }}#video-section" class="popup-youtube"><img src="/storage/images/play.svg" alt="/"></a>
                            <h6 class="title mb-0">{{ __('home.overview') }}</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-5 col-sm-6 col-10">
                            <div class="icon-bx-wraper style-11 left box-hover m-b30  fadeInRight" data--duration="2s" data--delay="0.3s">
                                <div class="icon-bx-sm radius">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <img src="/storage/images/icon/icon9.svg" alt="">
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title mb-0"><span class="counter">30</span>+</h4>
                                    <p>{{ __('home.clients') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-sm-6 col-10">
                            <div class="icon-bx-wraper style-11 left box-hover m-b30  fadeInRight" data--duration="2s" data--delay="0.4s">
                                <div class="icon-bx-sm radius">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <img src="/storage/images/icon/icon12.svg" alt="">
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title mb-0"><span class="counter">4</span>+</h4>
                                    <p>{{ __('home.open_source') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-sm-6 col-10">
                            <div class="icon-bx-wraper style-11 left box-hover m-b30  fadeInRight" data--duration="2s" data--delay="1.5s">
                                <div class="icon-bx-sm radius">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <img src="/storage/images/icon/icon10.svg" alt="">
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title mb-0"><span class="counter">24</span>+</h4>
                                    <p>{{ __('home.projects') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Feature  -->
            <section class="content-inner-2 bg-white" style="background-image: url(/storage/images/background/bg20.png); background-size: 100%; background-position: center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 m-b30  " data-aos="fade-right" data-aos-duration="1000">
                            <div class="section-head style-4 mb-0">
                                <h6 class="sub-title">{{ __('home.key_strengths') }}</h6>
                                <h2 class="title font-w700">{{ __('home.workflow') }}</h2>
                            </div>
                            <div class="dz-content">
                                <p class="m-b30">{{ __('home.workflow_description') }}</p>
                                <a href="{{route('about')}}" class="btn btn-md  btn-primary">{{ __('home.meet_team') }}</a>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30  " data-aos="fade-left" data-aos-duration="1000">
                            <div class="icon-bx-wraper style-12  zoomIn" data--delay="1s">
                                <ul class="nav nav-tabs" style="--sr-total: 6">
                                    <li class="nav-item" style="--sr-item:1">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#service4"><img src="/storage/images/icon/icon4.svg" alt=""></a>
                                    </li>
                                    <li class="nav-item" style="--sr-item:2">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#service6"><img src="/storage/images/icon/icon6.svg" alt=""></a>
                                    </li>
                                    <li class="nav-item" style="--sr-item:3">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#service7"><img src="/storage/images/icon/icon7.svg" alt=""></a>
                                    </li>
                                    <li class="nav-item" style="--sr-item:4">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#service8"><img src="/storage/images/icon/icon8.svg" alt=""></a>
                                    </li>
                                    <li class="nav-item" style="--sr-item:5">
                                        <a class="nav-link active" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#service1"><img src="/storage/images/icon/icon1.svg" alt=""></a>
                                    </li>
                                    <li class="nav-item" style="--sr-item:6">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#service2"><img src="/storage/images/icon/icon2.svg" alt=""></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fade show" id="service1">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon1.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">{{ __('home.project_study') }}</h4>
                                                <p class="m-b20 px-4">{{ __('home.project_study_description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service2">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon2.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">{{ __('home.design_development') }}</h4>
                                                <p class="m-b20 px-4">{{ __('home.design_development_description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service4">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon4.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">{{ __('home.testing_launch') }}</h4>
                                                <p class="m-b20 px-4">{{ __('home.testing_launch_description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service6">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon6.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">{{ __('home.support') }}</h4>
                                                <p class="m-b20 px-4">{{ __('home.support_description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service7">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon7.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">{{ __('home.seo_marketing') }}</h4>
                                                <p class="m-b20 px-4">{{ __('home.seo_marketing_description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service8">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon8.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">{{ __('home.software_application_solutions') }}</h4>
                                                <p class="m-b20 px-4">{{ __('home.software_application_solutions_description') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio -->
            <section class="content-inner-1 overflow-hidden" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(/storage/images/background/bg19.png); background-size: 90%; background-position: center; background-repeat: no-repeat;">
                <div class="left-container">
                    <div class="row lightgallery align-items-center">
                        <div class="col-lg-4 m-b50">
                            <div class="section-head mb-0 style-4">
                                <h6 class="sub-title  fadeInUp" data--duration="2s" data--delay="0.5s"> {{ __('home.portfolio') }} </h6>
                                <h2 class="title  fadeInUp" data--duration="2s" data--delay="1s">{{ __('home.recent_projects') }} </h2>
                            </div>
                            <div class="dz-content  fadeInUp" data--duration="2s" data--delay="1.5s">
                                <p class="pb-1 pt-1">{{ __('home.recent_projects_description') }}</p>
                                <a href="{{route('projets')}}" class="btn btn-primary">{{ __('home.see_more') }}</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="portfolio-crousel1 owl-carousel owl-none">
                                <div class="item  fadeInUp" data--duration="2s" data--delay="0.1s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine active">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/web1.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/web1.jpg" data-src="/storage/images/portfolio/web1.jpg" class="lightimg" title="Design">
                                                <i class="la la-plus"></i>
                                            </span>
                                        </div>
                                        <div class="dlab-info">
                                            <h5 class="title"><a href="services-details-1.html">Strategy & Research</a></h5>
                                            <p class="post-author"><a href="services-details-1.html">Brand, Website </a></p>
                                            <p class="post-date"><a href="services-details-1.html">Dec 14, 2023 </a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  fadeInUp" data--duration="2s" data--delay="0.2s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/web4.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/web4.jpg" data-src="/storage/images/portfolio/web4.jpg" class="lightimg" title="Design">
                                                <i class="la la-plus"></i>
                                            </span>
                                        </div>
                                        <div class="dlab-info">
                                            <h5 class="title"><a href="services-details-1.html">Strategy & Research</a></h5>
                                            <p class="post-author"><a href="services-details-1.html">Brand, Website </a></p>
                                            <p class="post-date"><a href="services-details-1.html">Dec 14, 2023 </a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  fadeInUp" data--duration="2s" data--delay="0.3s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/web1.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/web1.jpg" data-src="/storage/images/portfolio/web1.jpg" class="lightimg" title="Design">
                                                <i class="la la-plus"></i>
                                            </span>
                                        </div>
                                        <div class="dlab-info">
                                            <h5 class="title"><a href="services-details-1.html">Strategy & Research</a></h5>
                                            <p class="post-author"><a href="services-details-1.html">Brand, Website </a></p>
                                            <p class="post-date"><a href="services-details-1.html">Dec 14, 2023 </a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  fadeInUp" data--duration="2s" data--delay="0.4s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/web1.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/web1.jpg" data-src="/storage/images/portfolio/web1.jpg" class="lightimg" title="Design">
                                                <i class="la la-plus"></i>
                                            </span>
                                        </div>
                                        <div class="dlab-info">
                                            <h5 class="title"><a href="services-details-1.html">Strategy & Research</a></h5>
                                            <p class="post-author"><a href="services-details-1.html">Brand, Website </a></p>
                                            <p class="post-date"><a href="services-details-1.html">Dec 14, 2023 </a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item  fadeInUp" data--duration="2s" data--delay="0.5s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/web4.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/web4.jpg" data-src="/storage/images/portfolio/web4.jpg" class="lightimg" title="Design">
                                                <i class="la la-plus"></i>
                                            </span>
                                        </div>
                                        <div class="dlab-info">
                                            <h5 class="title"><a href="services-details-1.html">Strategy & Research</a></h5>
                                            <p class="post-author"><a href="services-details-1.html">Brand, Website </a></p>
                                            <p class="post-date"><a href="services-details-1.html">Dec 14, 2023 </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           <!-- Testemonials Section -->
            @include('shared.testemonials')
            <!-- End Testemonials Section -->


            <!-- Blog -->
            <section class="content-inner" style="background-image: url(/storage/images/background/bg19.png); background-size: 100%; background-position: center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head style-4 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h6 class="sub-title">{{ __('home.news') }}</h6>
                        <h2 class="title">{{ __('home.updates') }}</h2>
                    </div>
                    <div class="row p-5" style="text-align: center">
                        <div class="col-lg-6 col-md-6 col-sm-12  " data-aos="fade-right" data-aos-duration="10000">
                            <div class="dlab-blog style-3 m-b30">
                                <div class="dlab-media">
                                    <a href="https://www.amazon.com/Mastering-Angular-Test-Driven-Development-step-ebook/dp/B0CZLJSQ1S/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=&sr="><img src="/storage/images/news/book.jpeg" alt=""></a>
                                    <div class="post-date">{{ __('home.post_date') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-6 col-sm-12  " data-aos="fade-left" data-aos-duration="15000">
                            <div class="dlab-blog style-3 m-b30">
                                <div class="dlab-info p-5">
                                    <div class="dlab-meta">
                                        <ul>
                                            <li class="post-author"><i class="las la-user-circle"></i> {{ __('home.by') }} <a href="javascript:void(0);">Ezéchiel Amen AGBLA</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dlab-title"><a href="blog-details-1.html">{{ __('home.mastering_angular') }}</a></h4>
                                    <p class="m-b20">{{ __('home.mastering_angular_description') }}</p>
                                    <a href="https://www.amazon.com/Mastering-Angular-Test-Driven-Development-step-ebook/dp/B0CZLJSQ1S/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=&sr=" class="btn btn-primary" target="_blank">{{ __('home.buy_now') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
