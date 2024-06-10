@extends('layouts.gts')

@section('title', __('ACCUEIL'))

@section('content')

            <!-- Slider -->
            <div class="banner-four" style="background-image: url(/storage/images/main-slider/slider4/background2.png); background-size: cover; background-repeat: no-repeat; ">
                <div class="container banner-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-md-7" data-aos="fade-right" data-aos-duration="1000">
                            <div class="banner-content ">
                                <h6 data-wow-delay="0.5s" data-wow-duration="3s" class="wow fadeInUp sub-title pb-1 text-yellow">L'excellence numérique à portée de main</h6>
                                <h1 data-wow-delay="1s" data-wow-duration="3s" class="wow fadeInUp title m-b15">Créer l'avenir avec nous maintenant</h1>
                                <p data-wow-delay="1.5s" data-wow-duration="3s" class="wow fadeInUp description m-b20 pt-2">
                                    Profitez de notre approche intégrée pour des solutions numériques
                                    novatrices et adaptées à vos besoins</p>
                                <ul class="m-b30">
                                    <li class="wow fadeInUp" data-wow-delay="1.5s"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9" cy="9" r="6" fill="currentColor" />
                                            <circle cx="9" cy="9" r="7.5" stroke="currentColor" stroke-opacity="0.3" stroke-width="3" />
                                        </svg>
                                        Expertise en développement multiplateforme
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="1.5s"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9" cy="9" r="6" fill="currentColor" />
                                            <circle cx="9" cy="9" r="7.5" stroke="currentColor" stroke-opacity="0.3" stroke-width="3" />
                                        </svg>
                                        Modélisation IA
                                    </li>
                                </ul>

                                <a data-wow-delay="2s" data-wow-duration="3s" href="{{route('about')}}" class="wow fadeInUp btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-5" data-aos="fade-left" data-aos-duration="1000">
                            <div class="dz-media wow fadeIn" data-wow-delay="1s" data-wow-duration="3s">
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
                                <img src="/storage/images/main-slider/slider4/.png" alt="">

                                <ul>
                                    <li><img src="/storage/images/main-slider/slider4/pic3.png" class="wow zoomIn" data-wow-delay="2.2s" alt=""></li>
                                    <li><img src="/storage/images/main-slider/slider4/pic2.png" class="wow zoomIn" data-wow-delay="1.6s" alt=""></li>
                                    <li><img src="/storage/images/main-slider/slider4/pic1.png" class="wow zoomIn" data-wow-delay="0.8s" alt=""></li>
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
                        <h2 class="title">Nos services</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
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
                                    <h4 class="dlab-title m-b15">Modélisation <br> IA</h4>
                                    <p class="m-b20">Transformez vos données en connaissances exploitables grâce à nos solutions de modélisation d'intelligence artificielle</p>
                                    <a href="services-details-3.html" class="btn "><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
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
                                    <h4 class="dlab-title m-b15">Developpement mobile</h4>
                                    <p class="m-b20">Alliez flexibilité et performances avec nos solutions de développement d'applications natives et hybrides</p>
                                    <a href="services-details-3.html" class="btn"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
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
                                    <h4 class="dlab-title m-b15">Solutions Logicielles & Web</h4>
                                    <p class="m-b20">Applications web dynamiques ou systèmes de gestion de contenu sur mesure, notre expertise à votre service</p>
                                    <a href="services-details-3.html" class="btn"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
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
                                    <h4 class="dlab-title m-b15">Modélisation de Base de données</h4>
                                    <p class="m-b20">Optimisez votre gestion de données avec notre savoir-faire en modélisation de bases de données</p>
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
                    <div class="section-head style-4 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                        <h2 class="title text-white">Comment Nous Pouvons Contribuer à <br>Atteindre Vos Objectifs</h2>
                    </div>
                    <div class="video-bx style-4 m-b40 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="video-btn">
                            <a href="{{ route('about') }}#video-section" class="popup-youtube"><img src="/storage/images/play.svg" alt="/"></a>
                            <h6 class="title mb-0">Regardez pour une Vue d'Ensemble</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-5 col-sm-6 col-10">
                            <div class="icon-bx-wraper style-11 left box-hover m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="icon-bx-sm radius">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <img src="/storage/images/icon/icon9.svg" alt="">
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title mb-0"><span class="counter">30</span>+</h4>
                                    <p>Clients Satisfaits</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-sm-6 col-10">
                            <div class="icon-bx-wraper style-11 left box-hover m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="icon-bx-sm radius">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <img src="/storage/images/icon/icon12.svg" alt="">
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title mb-0"><span class="counter">4</span>+</h4>
                                    <p>Open Source</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-sm-6 col-10">
                            <div class="icon-bx-wraper style-11 left box-hover m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.5s">
                                <div class="icon-bx-sm radius">
                                    <a href="javascript:void(0);" class="icon-cell">
                                        <img src="/storage/images/icon/icon10.svg" alt="">
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-title mb-0"><span class="counter">24</span>+</h4>
                                    <p>Projets Déployés</p>
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
                        <div class="col-lg-6 m-b30 wow " data-aos="fade-right" data-aos-duration="1000">
                            <div class="section-head style-4 mb-0">
                                <h6 class="sub-title">Points Forts</h6>
                                <h2 class="title font-w700">Notre Flux de Travail</h2>
                            </div>
                            <div class="dz-content">
                                <p class="m-b30">Alimenté par la Créativité et Structuré par la Précision, Chaque Étape Répondant Méticuleusement à Vos Besoins.</p>
                                <a href="{{route('about')}}" class="btn btn-md  btn-primary">Rencontrez notre équipe</a>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30 wow " data-aos="fade-left" data-aos-duration="1000">
                            <div class="icon-bx-wraper style-12 wow zoomIn" data-wow-delay="1s">
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
                                                <h4 class="dlab-title m-b15">Étude de Projet et Modélisation</h4>
                                                <p class="m-b20 px-4">Chaque projet est méticuleusement pris en charge, pour un résultat exceptionnel</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service2">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon2.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">Design & Developpement</h4>
                                                <p class="m-b20 px-4">Conception et developpement des applications web, desktop et mobile sur mésure </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service4">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon4.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">Test & Lancement</h4>
                                                <p class="m-b20 px-4">Assurez la qualité avec des tests rigoureux avant le lancement </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service6">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon6.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">Support</h4>
                                                <p class="m-b20 px-4">Nous sommes là pour vous soutenir à chaque étape</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service7">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon7.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">SEO & Marketing</h4>
                                                <p class="m-b20 px-4">Boostez votre présence en ligne avec nos stratégies SEO et marketing </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="service8">
                                        <div class="icon-bx-wraper text-center">
                                            <div class="icon-bx">
                                                <img src="/storage/images/icon/icon8.svg" alt="">
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="dlab-title m-b15">Solutions Software & Application</h4>
                                                <p class="m-b20 px-4">Découvrez nos solutions logicielles et applications personnalisées pour votre entreprise</p>
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
                                <h6 class="sub-title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s"> Portfolio </h6>
                                <h2 class="title wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Projects Recents </h2>
                            </div>
                            <div class="dz-content wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
                                <p class="pb-1 pt-1">Découvrez quelques Projets Passionnants sur lesquels Notre Équipe a Travaillé Récemment.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Voir Plus</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="portfolio-crousel1 owl-carousel owl-none">
                                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine active">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/pica.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/pica.jpg" data-src="/storage/images/portfolio/pica.jpg" class="lightimg" title="Design">
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
                                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/picb.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/picb.jpg" data-src="/storage/images/portfolio/picb.jpg" class="lightimg" title="Design">
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
                                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/pic3.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/pic3.jpg" data-src="/storage/images/portfolio/pic3.jpg" class="lightimg" title="Design">
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
                                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/pic1.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/pic1.jpg" data-src="/storage/images/portfolio/pic1.jpg" class="lightimg" title="Design">
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
                                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                                    <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine">
                                        <div class="dlab-media dlab-img-overlay1">
                                            <img src="/storage/images/portfolio/pic2.jpg" alt="">
                                            <span data-exthumbimage="/storage/images/portfolio/pic2.jpg" data-src="/storage/images/portfolio/pic2.jpg" class="lightimg" title="Design">
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

            <!-- Testimonials -->
            <section class="content-inner-1 bg-primary" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(/storage/images/background/bg10.png); background-size: cover;">
                <div class="container">
                    <div class="section-head style-4 text-center">
                        <h6 class="sub-title text-center text-white ">Témoignages</h6>
                        <h2 class="title text-white text-center ">Ce que disent les gens</h2>
                    </div>
                    <div class="testimonials-carousel3 owl-carousel owl-theme owl-theme dots-style-2 owl-btn-5 owl-btn-white arrow-lg-none">
                        <div class="item">
                            <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                                <div class="testimonial-detail m-b20">
                                    <div class="testimonial-pic">
                                        <i class="fa-regular fa-user d-flex"></i>
                                    </div>
                                    <div class="clearfix">
                                        <strong class="testimonial-name">David Warner</strong>
                                        <span class="testimonial-position">CEO % Founder </span>
                                        <ul class="testimonial-rating">
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-text">
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris eleifend ipsum dolor.</p>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <div class="testimonial-detail m-b20">
                                    <div class="testimonial-pic">
                                        <img src="/storage/images/testimonials/pic5.jpg" alt="">
                                    </div>
                                    <div class="clearfix">
                                        <strong class="testimonial-name">Eleven Jhonson</strong>
                                        <span class="testimonial-position">CEO % Founder </span>
                                        <ul class="testimonial-rating">
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-text">
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris eleifend ipsum dolor.</p>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="testimonial-detail m-b20">
                                    <div class="testimonial-pic">
                                        <img src="/storage/images/testimonials/pic4.jpg" alt="">
                                    </div>
                                    <div class="clearfix">
                                        <strong class="testimonial-name">Iliana Akhter</strong>
                                        <span class="testimonial-position">CEO % Founder </span>
                                        <ul class="testimonial-rating">
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-text">
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris eleifend ipsum dolor.</p>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="testimonial-detail m-b20">
                                    <div class="testimonial-pic">
                                        <img src="/storage/images/testimonials/pic5.jpg" alt="">
                                    </div>
                                    <div class="clearfix">
                                        <strong class="testimonial-name">Daisy Jhonson</strong>
                                        <span class="testimonial-position">CEO % Founder </span>
                                        <ul class="testimonial-rating">
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-text">
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris eleifend ipsum dolor.</p>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                                <div class="testimonial-detail m-b20">
                                    <div class="testimonial-pic">
                                        <img src="/storage/images/testimonials/pic1.jpg" alt="">
                                    </div>
                                    <div class="clearfix">
                                        <strong class="testimonial-name">Eity Akhter</strong>
                                        <span class="testimonial-position">CEO % Founder </span>
                                        <ul class="testimonial-rating">
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                            <li><img src="/storage/images/testimonials/Star1.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testimonial-text">
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris eleifend ipsum dolor.</p>
                                    <p>Mauris eleifend ipsum dolor, sit amet elementum tortor mattis interdum. Praesent ut lobortis purus Mauris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Blog -->
            <section class="content-inner" style="background-image: url(/storage/images/background/bg19.png); background-size: 100%; background-position: center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head style-4 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h6 class="sub-title">Nouvelles</h6>
                        <h2 class="title">Actualités</h2>
                    </div>
                    <div class="row p-5" style="text-align: center">
                        <div class="col col-md-6 col-sm-12 wow " data-aos="fade-right" data-aos-duration="10000">
                            <div class="dlab-blog style-3 m-b30">
                                <div class="dlab-media">
                                    <a href="https://www.amazon.com/Mastering-Angular-Test-Driven-Development-step-ebook/dp/B0CZLJSQ1S/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=&sr="><img src="/storage/images/blog/book.jpeg" alt=""></a>
                                    <div class="post-date">10 Avril 2024</div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-md-6 col-sm-12 wow " data-aos="fade-left" data-aos-duration="15000">
                            <div class="dlab-blog style-3 m-b30">
                                <div class="dlab-info p-5">
                                    <div class="dlab-meta">
                                        <ul>
                                            <li class="post-author"><i class="las la-user-circle"></i> Par <a href="javascript:void(0);">Ezéchiel Amen AGBLA</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dlab-title"><a href="blog-details-1.html">Mastering Angular Test-Driven Development</a></h4>
                                    <p class="m-b20">Créez des applications Angular de haute qualité avec des instructions étape par étape et des exemples pratiques.</p>
                                    <a href="https://www.amazon.com/Mastering-Angular-Test-Driven-Development-step-ebook/dp/B0CZLJSQ1S/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=&sr=" class="btn btn-primary" target="_blank">Acheter Maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
