@extends('layouts.gts')

@section('title', __('SERVICES') )

@section('content')

<!-- Banner  -->
		<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr1.jpg);">
			<div class="container">
				<div class="dlab-bnr-inr-entry" data-aos="fade-up" data-aos-duration="1000">
					<h1>Nos services</h1>
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
                <div class="left-container container lightgallery align-items-center">
					<div class="card-container row text-center" data-aos="fade-up" data-aos-duration="1111">
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front  bg-image-1">
								<div class="overlay"></div>
								<p><i class="fa-regular fa-eye"></i><br>GTS<br>Deep Vision</p>
							</div>
							<div class="card-face back bg-image-1">
								<div class="overlay"></div>
								<p>Nos modèles permettent des applications avancées telles que la reconnaissance de personnes et d'objets, l'analyse de situations, le comptage automatique, ainsi que des analyses approfondies en imagerie satellitaire et médicale.</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-2">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-language"></i><br>GTS<br>Deep Language</p>
							</div>
							<div class="card-face back bg-image-2">
								<div class="overlay"></div>
								<p>Optimisez vos stratégies d'écoute client, d'assistance automatisée et de gestion des centres d'appels, tout en intégrant des solutions de communications dialectiques de langues locales, grâce à notre expertise en traitement du langage naturel.</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-3">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-diagram-project"></i><br>GTS<br>Système d'Optimisation</p>
							</div>
							<div class="card-face back bg-image-3">
								<div class="overlay"></div>
								<p>Une suite complète d'outils conçus pour maximiser l'efficacité opérationnelle et la rentabilité de votre entreprise. Grâce à notre combinaison unique de solveurs de programmation par contraintes et d'approches d'apprentissage, nous vous offrons la clé pour une planification précise et une gestion optimale des processus complexes.</p>
							</div>
						</div>
					</div>
					<div class="card-container text-center row" data-aos="fade-left" data-aos-duration="1111">
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-4">
								<div class="overlay"></div>
								<p> <i class="fa-solid fa-mobile-screen-button"></i><br>GTS<br>Developpement Mobile</p>
							</div>
							<div class="card-face back bg-image-4">
								<div class="overlay"></div>
								<p>Alliez flexibilité et performances avec nos solutions de développement d'applications natives et hybrides</p>
							</div>
						</div><div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-5">
								<div class="overlay"></div>
								<p><i class="flaticon-boost-1"></i></i><br>GTS<br>Solutions Logicielles & Web</p>
							</div>
							<div class="card-face back bg-image-5">
								<div class="overlay"></div>
								<p>Applications web dynamiques ou systèmes de gestion de contenu sur mesure, notre expertise à votre service</p>
							</div>
						</div><div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-6">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-database"></i><br>GTS<br>Modélisation de Base de données</p>
							</div>
							<div class="card-face back bg-image-6">
								<div class="overlay"></div>
								<p>Optimisez votre gestion de données avec notre savoir-faire en modélisation de bases de données</p>
							</div>
						</div>
					</div>
					<div class="card-container text-center row" data-aos="fade-right" data-aos-duration="1000"> 
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front  bg-image-7">
								<div class="overlay"></div>
								<p><i class="fas fa-puzzle-piece"></i><br>GTS<br>Analyse Comportementale Avancée</p>
							</div>
							<div class="card-face back bg-image-7">
								<div class="overlay"></div>
								<p>Nous utilisons des standards de modélisation de pointe et des techniques d'apprentissage profond pour étudier les comportements des clients, couvrant des domaines allant du marketing à la détection de fraudes.
									Cas d'utilisation : Analyse de transactions frauduleuses,
									Segmentations comportementales,
									Moments de vie,
									Moteur de recommandation,
									Prévention de l'attrition</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front  bg-image-8">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-cloud"></i></i><br>GTS<br>Developpement d'Application dans le Cloud</p>
							</div>
							<div class="card-face back bg-image-8">
								<div class="overlay"></div>
								<p> Des applications cloud robustes, sécurisées et évolutives. Profitez d'une mise en service rapide, d'une optimisation des ressources et d'un support continu pour garantir la réussite de votre projet numérique.</p>
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
