@if ($route ==='home')  
<footer class="site-footer style-4" id="footer" style="background-image: url(/storage/images/background/bg10.png); background-size: cover;">
    <div class="footer-top">
        <div class="container">
            <div class="wrapper-inner">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-5 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
                        <div class="logo mb-2">
                            <img src="/storage/images/logo.png" alt="footer-logo">
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-md-7 col-xl-6 ms-auto wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <h6 class="title">Subscribe To Our Newsletter</h6>
                        <div class="dlab-subscribe style-4">
                            <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit" class="btn btn-light">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Contact Us</h5>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt "></i>
                                <span>Marmora Road Chi Minh City, Vietnam</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>+91 123-456-7890<br>+91 987-654-3210</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope "></i>
                                <span>info@example.com <br>info@example.com</span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="widget widget_services style-1">
                        <h5 class="footer-title">Our links</h5>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us-1.html">About Us</a></li>
                            <li><a href="services-1.html">Services</a></li>
                            <li><a href="team-1.html">Team</a></li>
                            <li><a href="blog-details-1.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="widget widget_services style-1">
                        <h5 class="footer-title">Our Services</h5>
                        <ul>
                            <li><a href="blog-grid-2.html">Strategy & Research</a></li>
                            <li><a href="blog-grid-2.html">Web Development</a></li>
                            <li><a href="blog-grid-2.html">Web Solution</a></li>
                            <li><a href="blog-grid-2.html">Digital Marketing</a></li>
                            <li><a href="blog-grid-2.html">App Design </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="widget widget_services style-1">
                        <h5 class="footer-title">Other links</h5>
                        <ul>
                            <li><a href="faq-1.html">FAQ</a></li>
                            <li><a href="portfolio-details.html">Portfolio</a></li>
                            <li><a href="index-4.html">Privacy Policy</a></li>
                            <li><a href="index-4.html">Terms & Conditions</a></li>
                            <li><a href="index-4.html">Support </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 text-left">
                    <span class="copyright-text">Copyright © 2023 <a href="https://dexignzone.com/" target="_blank">DexignZone</a>. All rights reserved.</span>
                </div>
                <div class="col-md-5 ms-auto">
                    <ul class="footer-link ">
                        <li><a href="about-us-1.html">About</a></li>
                        <li><a href="faq-1.html">Help Desk</a></li>
                        <li><a href="about-us-1.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

@else  

<footer class="site-footer style-2" id="footer" style="background-image: url(/storage/images/background/bg4.png);">
		<div class="container">
			<div class="dlab-subscribe style-1 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<h2 class="title">Subscribe To Our Newsletter</h2>
					</div>
					<div class="col-lg-6">
						<form class="dzSubscribe" action="script/mailchamp.php" method="post">
							<div class="dzSubscribeMsg"></div>
							<div class="form-group">
								<div class="input-group shadow">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary gradient">
											<i class="las la-paper-plane scale4"></i>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-top">
            <div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="widget widget_about">
							<div class="footer-logo">
								<a href="index.html"><img src="/storage/images/logo.png" alt=""></a> 
							</div>
							<div class="widget widget_getintuch">
								<ul>
									<li>
										<i class="fa fa-phone gradient"></i>
										<span>1800-123-4567<br>+91 987-654-3210</span> 
									</li>
									<li>
										<i class="fa fa-envelope gradient"></i> 
										<span>info@example.com <br>services@gmail.com</span>
									</li>
									<li>
										<i class="fas fa-map-marker-alt gradient"></i>
										<span>Demo Address #8901 Marmora Road Chi Minh City, Vietnam</span>
									</li>
								</ul>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-lg-2 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeIn;">
						<div class="widget widget_services">
							<h5 class="footer-title">Our links</h5>
							<ul>
								<li><a href="javascript:void(0);">Home</a></li>
								<li><a href="javascript:void(0);">About Us</a></li>
								<li><a href="javascript:void(0);">Services</a></li>
								<li><a href="javascript:void(0);">Team</a></li>
								<li><a href="javascript:void(0);">Blog</a></li>
							</ul>
						</div>
                    </div>
					<div class="col-xl-3 col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeIn;">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Services</h5>
							<ul>
								<li><a href="javascript:void(0);">Strategy &amp; Research</a></li>
								<li><a href="javascript:void(0);">Web Development</a></li>
								<li><a href="javascript:void(0);">Web Solution</a></li>
								<li><a href="javascript:void(0);">Digital Marketing</a></li>
								<li><a href="javascript:void(0);">App Design </a></li>
							</ul>
						</div>
                    </div>
					<div class="col-xl-3 col-lg-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.8s; animation-name: fadeIn;">
						<div class="widget widget_services">
						   <h5 class="footer-title">Other links</h5>
							<ul>
								<li><a href="javascript:void(0);">FAQ</a></li>
								<li><a href="javascript:void(0);">Portfolio</a></li>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
								<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
								<li><a href="javascript:void(0);">Support </a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 text-start"> 
						<span class="copyright-text">Copyright © 2023 <a href="https://dexignzone.com/" target="_blank">DexignZone</a>. All rights reserved.</span> 
					</div>
					<div class="col-lg-6 col-md-5 text-end"> 
						<div class="dlab-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="_blank"></a></li>
								<li><a class="fab fa-instagram" href="https://www.instagram.com/" target="_blank"></a></li>
								<li><a class="fab fa-twitter" href="https://www.twitter.com/" target="_blank"></a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </footer>@endif

