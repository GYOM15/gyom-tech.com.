@extends('layouts.gts')

@section('title', __('contact.contact'))

@section('content')

<script async src="https://www.google.com/recaptcha/api.js"></script>

	<!-- Banner  -->
		<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr1.jpg);" data-aos="zoom-in" data-aos-duration="1000">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1>{{__('shared.cta')}}</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('home')}}">{{__('shared.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{__('shared.cta')}}</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- Get A Quote -->
		<div class="content-inner-2" style="background-image: url(/storage/images/background/bg2.png); background-repeat: no-repeat; background-size:100%;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-12 m-b60" data-aos="fade-right" data-aos-duration="1000">
						<div class="map-2">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.3890785464934!2d-13.625088554680968!3d9.63341673912878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf1d2b6fa62a9e3d%3A0x33db167ec2a4e091!2sCarrefour%20Ambiance%20Lambanyi!5e0!3m2!1sfr!2sca!4v1713989201943!5m2!1sfr!2sca" width="100%" height="570" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow " data-aos="fade-left" data-aos-duration="1000">

						@include('shared.flash')

						<form class="form-group" id="contact-form" method="post" action="{{route('contact.send')}} ">
							@csrf
							<div class="row gy-4 mb-4">
								@include('layouts.input', ['class' => 'col-xl-6','placeholder' => __('contact.firstname'), 'name' => 'firstname'])
								@include('layouts.input', ['class' => 'col-xl-6','placeholder' => __('contact.lastname'), 'name' => 'name'])
							</div>
							<div class="row gy-4 mb-4">
								@include('layouts.input', ['class' => 'col-xl-6','placeholder' => __('contact.phone'), 'name' => 'phone'])
								@include('layouts.input', ['type' => 'email', 'class' => 'col-xl-6','placeholder' => __('contact.email'), 'name' => 'email'])
							</div>
							@include('layouts.input', ['type' => 'textarea', 'class' => 'col mb-5','placeholder' => __('contact.message'), 'name' => 'message'])

							<!-- Place pour le captcha -->
                            <!-- Google Recaptcha Widget-->
                            <div class="g-recaptcha mt-3" data-sitekey="6LcY6uYpAAAAAGycaMQdDf4d7QBMcjeQuR47QlkR">salut: {{ config('services.recaptcha.key') }}</div>

							<div class="col-sm-12 mt-5">
								<button name="submit" type="submit" class="btn btn-primary gradient border-0 rounded-xl">{{__('shared.cta')}}</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="content-inner-2" data-aos="fade-up" data-aos-duration="1000">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="icon-bx-wraper style-9 m-md-b60 center">
							<div class="icon-bx-sm radius gradient">
								<a href="javascript:void(0);" class="icon-cell text-white">
									<i class="las la-phone-volume"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-title">{{__('contact.phone_label')}}</h4>
								<p>+1 514 710 6144</p>
								<p>+224 622 517 070</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="icon-bx-wraper style-9 m-md-b60 center">
							<div class="icon-bx-sm radius gradient">
								<a href="javascript:void(0);" class="icon-cell  text-white">
									<i class="las la-map-marker"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-title">{{__('contact.location')}}</h4>
								<p>Rue Egan, Montréal QC</p>
								<p>Lambanyi, Conakry - Guinéé</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="icon-bx-wraper style-9 center">
							<div class="icon-bx-sm radius gradient">
								<a href="javascript:void(0);" class="icon-cell text-white">
									<i class="las la-envelope-open"></i>
								</a>
							</div>
							<div class="icon-content">
								<h4 class="dlab-title">{{__('contact.email_label')}}</h4>
								<p>contact@gyom-tech.com</p>
								<p>infos@gyom-tech.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Clients Logo -->
		@include('shared.clientLogo')

@endsection
