@extends('layouts.gts')

@section('title', __('ACCUEIL'))

@section('content')

<div id="loading-area" class="loading-03"></div>

	<!-- Header End -->
	<div class="page-content bg-white">
		<!-- Banner  -->
		<div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(images/banner/bnr2.png), var(--gradient-sec);  background-size: cover, 200%; ">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1>Services Details 3</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row style-1">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Services Details 3</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Services Details -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 m-b30">
						<aside class="side-bar sticky-top">
                            <div class="service_menu_nav m-b40">
								<ul>
									<li><a href="services-details-1.html">ALL SERVICES</a> </li>
									<li><a href="services-details-1.html">Strategy & Research</a></li>
									<li class="active"><a href="services-details-1.html">Web Development</a>  </li>
									<li><a href="services-details-1.html">Web Solution</a>  </li>
									<li><a href="services-details-1.html">Company Branding</a> </li>
									<li><a href="services-details-1.html">SEO & Marketing</a> </li>
									<li><a href="services-details-1.html">24X7 Support</a> </li>
								</ul>
							</div>
							<div class="widget_contact" style="background-image:url(images/about/pic2.jpg);">
								<div class="widget-content">
									<img src="images/question.png" width="80" alt="">
									<h4>Do you need any help?</h4>
									<div class="phone-number"><a href="#">+72 9682 1440 213</a></div>
									<div class="email"><a href="#">info@support.com</a></div>
									<div class="link-btn">
										<a href="contact-us-1.html" class="btn btn-primary gradient">
											Contact Us		
										</a>
									</div>
								</div>
							</div>
                        </aside>
					</div>
					<div class="col-xl-8 col-lg-8">
						<div class="service-carouse owl-carousel owl-dots-primary-full owl-none owl owl-carousel owl-theme mb-4">
							<div class="item">
								<img src="images/services/pic7.jpg" alt="">
							</div>
							<div class="item">
								<img src="images/services/pic8.jpg" alt="">
							</div>
							<div class="item">
								<img src="images/services/pic9.jpg" alt="">
							</div>
						</div>
						<div class="dlab-content">
							<div class="m-b40">
								<h3>Providing world class service experiences.</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
							<div class="row">
								<div class="col-lg-7 m-b30">
									<h3 class="mb-3">How You Start Web Development ?</h3>
									<ul class="list-check style-1 primary">
										<li>Lorem Ipsum is simply dummy text of the printing.</li>
										<li>Lorem Ipsum has been the industry's standard dummy.</li>
										<li>when an unknown printer took a galley of type and.</li>
										<li>It has survived not only five centuries, but also.</li>
										<li>Recently with desktop publishing software like Aldus.</li>
										<li>Lorem Ipsum is simply dummy text of the printing.</li>
									</ul>
								</div>
								<div class="col-lg-5 m-b30">
									<img src="images/projects/project-2/pic6.jpg" class="rounded-sm" alt=""/>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
    <!-- Footer -->
    <!-- Footer End -->
	<button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
</div>	
@endsection
