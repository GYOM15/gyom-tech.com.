@extends('layouts.gts')

@section('title', __('SERVICES') )

@section('content')

<!-- Banner  -->
		<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr1.jpg);">
			<div class="container">
				<div class="dlab-bnr-inr-entry" data-aos="fade-up" data-aos-duration="1000">
					<h1>Nos services numériques</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page">Services</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
        <section class="content-inner bg-white title" style="background-image: url(/storage/images/background/bg20.png); background-size: cover;">
            <div class="container">
                <div class="section-head style-4 text-center" data-aos="fade-right" data-aos-duration="1000">
                    <h6 class="sub-title">Services</h6>
                    <div class="p-5"></div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-duration="1000">
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

		
		<!-- Our Fetures -->
		<section class="content-inner bg-gray" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">Évolution</h2>
				</div>
				<div class="row align-items-center about-wraper-2">
					<div class="col-lg-4 col-md-6">
						<div class="row">
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="icon-bx-wraper right m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-idea"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Analyse</h4>
										<p>Explorer et comprendre pour mieux créer.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper right m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-vector"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Conception</h4>
										<p>Design pensé pour vous, par nous.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper right m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="fa-solid fa-ranking-star"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Marketing SEO</h4>
										<p>Être vu, être trouvé, être aimé.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow zoomIn d-lg-block d-none" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="dz-media text-center m-b30 scale1">
							<img src="/storage/images/about/img7.png" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="row">
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-coding"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Développement</h4>
										<p>Fait avec soin, codé avec passion.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-rocket"></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Lancement</h4>
										<p>Prêt à briller? On s'occupe de tout.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp " data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20"> 
										<a href="javascript:void(0);" class="icon-cell"><i class="fa-brands fa-searchengin"></i></i></a> 
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">Recherche</h4>
										<p>Des informations qui guident, des solutions qui inspirent.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Contact -->
		<div class="content-inner-3 button" data-aos="fade-up" data-aos-duration="1000">
            <!-- Contact button -->
            <div class = "row p-5 gy-5">
                <div class = "container text-center">
                    <p style = "font-size : 2em;">Seulement quelques minutes suffisent pour commencer avec GTS. <br> Comprenez vos besoins, commencez avec nous, dès aujourd'hui.</p>
                    <a class="btn btn-primary mr-1" >Contactez-Nous<span class=" m-2"> <i class="fa-solid fa-arrow-right"></i><span> </a>
                </div>
            </div>
		</div>

@endsection
