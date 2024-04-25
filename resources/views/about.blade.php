@extends('layouts.gts')

@section('title', __('A PROPOS') )

@section('content')


<!-- About us -->
<section class="content-inner about-wraper-1 title" style="background-image: url(/storage/images/background/bg15.png); background-size: contain; background-position: center right; background-repeat: no-repeat;">
    <div class="container" >
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-primary">À propos</h6>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 wow " data-aos="fade-right" data-aos-duration="1000">
                <div class="dz-media left">
                    <img src="/storage/images/about/about-section-img.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 m-b30 wow " data-aos="fade-left" data-aos-duration="1000">
                <div class="section-head style-1">
                    <h2 class="title m-b20">Nous batissons le futur et catalysons l'innovation</h2>
                    <p>Qu'il s'agisse du développement de solutions numériques innovantes, de la modélisation avancée d'intelligence artificielle ou encore de la modélisation éfficace de bases de données, notre équipe d'ingénieurs et de techniciens hautement qualifiés se tient constamment à l'affût des dernières avancées technologiques.</p>
                </div>
                <p>Nous repoussons les limites pour concrétiser vos idées les plus audacieuses et transformer vos besoins en réalité.</p>
            </div>
        </div>
    </div>
</section>

<!-- Etapes -->
<section class="content-inner-2 title bg-primary" style="background-image: url(/storage/images/background/bg22.png); background-size: cover;">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h2 class="title text-white">Les étapes clés du processus de développement</h2>
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
                        <h5 class="dlab-title text-white m-b15">Phase d'Analyse et Modélisation Conceptuelle</h5>
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
                        <h5 class="dlab-title text-white m-b15">Prototype interactif et Conception Visuelle</h5>
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
                        <h5 class="dlab-title text-white m-b15">Phase de Développement, Test de Qualité et Lancement</h5>
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
                    <a href="javascript:void();">
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
            <h2 class="title"> Notre équipe</h2>
        </div>
        <div class="container all_team" id="team">
            <div class="row gx-4 team">
                
                <div class="col-xl-3 col-md-3  mb-5 mt-5 carte-team" data-aos="zoom-in-right" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">Ezéchiel Amen AGBLA</h5>
                        <p>Angular <span class="pipe">&</span> Ionic Developer Expert</p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3  mb-5 mt-5 carte-team" data-aos="zoom-in" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">Aristide Gnimassou</h5>
                        <p>Backend Developer </p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3  mb-5 mt-5 carte-team" data-aos="zoom-in-left" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">Sékou Kaba</h5>
                        <p>Data Scientist</p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3  mb-5 mt-5 carte-team" data-aos="zoom-in-left" data-aos-duration="800">
                    <div class="team-image" ><img src="/storage/images/about/logo.png" alt=""></div>
                    <div class="t_description">
                        <h5 class="ms-2 me-3">Guy Olivier Millimouno</h5>
                        <p>Fullstack Developer</p>
                        <div class="t_list_i">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>   
    </div>
</section>

<!-- Testimonials -->
<section class="content-inner-1 title" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-center text-primary ">Témoignages</h6>
            <h2 class="title text-center ">Ce que disent les gens</h2>
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


@endsection
