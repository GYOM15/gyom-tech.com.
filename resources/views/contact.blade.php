@extends('layouts.gts')

@section('title', __('CONTACT') )

@section('content')

	<!-- Banner  -->
		<div class="dlab-bnr-inr overlay-gradient-dark text-center" style="background-image: url(/storage/images/banner/bnr1.jpg);">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1>Get A Quote</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Get A Quote</li>
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
					<div class="col-lg-6 m-b60">
						<div class="map-2">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14448.884443175983!2d75.81853095!3d25.128214449999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1615281171136!5m2!1sen!2sin" height="570" style="border:0; width:100%; vertical-align: middle;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<div class="col-lg-6 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<form class="dlab-form dzForm" method="POST" action="script/contact_smtp.php">
							<div class="dzFormMsg"></div>
							<input type="hidden" class="form-control" name="dzToDo" value="Contact">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
										<input name="dzFirstName" required="" type="text" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="dzLastName" type="text" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="dzEmail" required="" type="text" class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="dzPhoneNumber" required="" type="text" class="form-control" placeholder="Phone No.">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="dzOther[project_title]" required="" type="text" class="form-control" placeholder="Project Title">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<select name="dzOther[choose_service]" class="form-control">
											<option selected="">Choose Service</option>
											<option value="1">Web Development</option>
											<option value="2">Web Design</option>
											<option value="3">Strategy & Research</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<textarea name="dzMessage" required="" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-group">
										<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
										<input class="form-control d-none" style="display:none;" data-recaptcha="true" required="" data-error="Please complete the Captcha">
									</div>
								</div>
								<div class="col-sm-12">
									<button name="submit" type="submit" value="Submit" class="btn btn-primary gradient border-0 rounded-xl btn-block">Submit Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="content-inner-2">
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
								<h4 class="dlab-title">Call Now</h4>
								<p>123 456 7890</p>
								<p>987 654 3210</p>
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
								<h4 class="dlab-title">Location</h4>
								<p>1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad</p>
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
								<h4 class="dlab-title">Email Now</h4>
								<p>info@gmail.com</p>
								<p>Services@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
