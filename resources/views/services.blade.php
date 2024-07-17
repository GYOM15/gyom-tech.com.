@extends('layouts.gts')

@section('title', __('services.services') )

@section('content')

<!-- Banner  -->
		<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr1.jpg);">
			<div class="container">
				<div class="dlab-bnr-inr-entry" data-aos="fade-up" data-aos-duration="1000">
					<h1>{{__('services.services_bnr')}}</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('home')}}">{{__('shared.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{__('services.services_bnr')}}</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<div id="hover-message">{{ __('services.hover_message') }}</div>
		<section class="content-inner bg-white title" style="background-image: url(/storage/images/background/bg20.png); background-size: cover;">
			<div class="container">
				<div class="section-head style-4 text-center" data-aos="fade-right" data-aos-duration="1000">
					<h6 class="sub-title">{{ __('services.section_title') }}</h6>
					<div class="p-5"></div>
				</div>
				<div class="left-container container lightgallery align-items-center">
					<div class="card-container row text-center" data-aos="fade-up" data-aos-duration="1000">
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-1">
								<div class="overlay"></div>
								<p><i class="fa-regular fa-eye"></i><br>{{ __('services.gts') }}<br>{{ __('services.deep_vision') }}</p>
							</div>
							<div class="card-face back bg-image-1">
								<div class="overlay"></div>
								<p>{{ __('services.deep_vision_description') }}</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-2">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-language"></i><br>{{ __('services.gts') }}<br>{{ __('services.deep_language') }}</p>
							</div>
							<div class="card-face back bg-image-2">
								<div class="overlay"></div>
								<p>{{ __('services.deep_language_description') }}</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-3">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-diagram-project"></i><br>{{ __('services.gts') }}<br>{{ __('services.optimization_system') }}</p>
							</div>
							<div class="card-face back bg-image-3">
								<div class="overlay"></div>
								<p>{{ __('services.optimization_system_description') }}</p>
							</div>
						</div>
					</div>
					<div class="card-container text-center row" data-aos="fade-left" data-aos-duration="1000">
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-4">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-mobile-screen-button"></i><br>{{ __('services.gts') }}<br>{{ __('services.mobile_development') }}</p>
							</div>
							<div class="card-face back bg-image-4">
								<div class="overlay"></div>
								<p>{{ __('services.mobile_development_description') }}</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-5">
								<div class="overlay"></div>
								<p><i class="flaticon-boost-1"></i><br>{{ __('services.gts') }}<br>{{ __('services.software_web_solutions') }}</p>
							</div>
							<div class="card-face back bg-image-5">
								<div class="overlay"></div>
								<p>{{ __('services.software_web_solutions_description') }}</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-6">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-database"></i><br>{{ __('services.gts') }}<br>{{ __('services.database_modeling') }}</p>
							</div>
							<div class="card-face back bg-image-6">
								<div class="overlay"></div>
								<p>{{ __('services.database_modeling_description') }}</p>
							</div>
						</div>
					</div>
					<div class="card-container text-center row" data-aos="fade-right" data-aos-duration="1000">
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-7">
								<div class="overlay"></div>
								<p><i class="fas fa-puzzle-piece"></i><br>{{ __('services.gts') }}<br>{{ __('services.advanced_behavioral_analysis') }}</p>
							</div>
							<div class="card-face back bg-image-7">
								<div class="overlay"></div>
								<p>{{ __('services.advanced_behavioral_analysis_description') }}</p>
							</div>
						</div>
						<div class="card col-md-4 col-xl-3">
							<div class="card-face front bg-image-8">
								<div class="overlay"></div>
								<p><i class="fa-solid fa-cloud"></i><br>{{ __('services.gts') }}<br>{{ __('services.cloud_application_development') }}</p>
							</div>
							<div class="card-face back bg-image-8">
								<div class="overlay"></div>
								<p>{{ __('services.cloud_application_development_description') }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="content-inner bg-gray" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="section-head style-3 text-center">
					<h2 class="title">{{ __('services.evolution') }}</h2>
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
										<h4 class="dlab-tilte text-capitalize">{{ __('services.analysis') }}</h4>
										<p>{{ __('services.analysis_description') }}</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper right m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20">
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-vector"></i></a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">{{ __('services.design') }}</h4>
										<p>{{ __('services.design_description') }}</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper right m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20">
										<a href="javascript:void(0);" class="icon-cell"><i class="fa-solid fa-ranking-star"></i></a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">{{ __('services.seo_marketing') }}</h4>
										<p>{{ __('services.seo_marketing_description') }}</p>
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
										<h4 class="dlab-tilte text-capitalize">{{ __('services.development') }}</h4>
										<p>{{ __('services.development_description') }}</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20">
										<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-rocket"></i></a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">{{ __('services.launch') }}</h4>
										<p>{{ __('services.launch_description') }}</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
								<div class="icon-bx-wraper left m-b10 icon-up style-8 m-md-b30">
									<div class="icon-bx-sm m-b20">
										<a href="javascript:void(0);" class="icon-cell"><i class="fa-brands fa-searchengin"></i></a>
									</div>
									<div class="icon-content">
										<h4 class="dlab-tilte text-capitalize">{{ __('services.research') }}</h4>
										<p>{{ __('services.research_description') }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Call to action button -->
		@include('shared.cta')

@endsection
