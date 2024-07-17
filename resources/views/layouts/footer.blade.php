@php
    $colClass = ($route === 'home') ? 'col-xl-4' : 'col-xl-3';
@endphp

<footer class="site-footer {{ $route === 'home' ? 'style-4' : 'style-2' }}" id="footer" style="background-image: url({{ $route === 'home' ? '/storage/images/background/bg10.png' : '/storage/images/background/bg4.png' }}); background-size: cover;" data-aos="fade-up" data-aos-duration="999">
        
        @if ($route === 'home')
        <div class="footer-top">
            <div class="container">
                <div class="wrapper-inner"> 
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-md-5 fadeIn" data-aos="zoom-in" data-aos-duration="1500">
                            <div class="logo mb-2">
                                <img src="/storage/images/footer-logo-white.png" alt="footer-logo">
                            </div>
                            <p>{{ __('footer.company_mission') }}</p>
                        </div>
                        <div class="col-md-7 col-xl-6 ms-auto " data-aos="fade-left" data-aos-duration="1000">
                            <h6 class="title">{{ __('footer.newsletter_title') }}</h6>
                            <div class="dlab-subscribe style-4">
                                <form class="dzSubscribe"  action="{{route('newsletter.register')}}" method="post">
                                    @csrf
                                    <div class="dzSubscribeMsg"></div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control" placeholder="{{ __('footer.newsletter_placeholder') }}">
                                            <div class="input-group-addon">
                                                <button name="submit" value="Submit" type="submit" class="btn btn-light">{{ __('footer.newsletter_button') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        
        
        @else
        <div class="container">
            <div class="dlab-subscribe style-1 " data-aos="fade-left" data-aos-duration="1000">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title">{{ __('footer.newsletter_title') }}</h2>
                    </div>
                    <div class="col-lg-6">
                        <form class="dzSubscribe" action="{{route('newsletter.register')}}" method="post">
                            @csrf
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group shadow">
                                    <input name="email" type="email" class="form-control" placeholder="{{ __('footer.newsletter_placeholder') }}">
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

        @endif

        <!-- Contenu commun pour les deux routes -->
                <div class="row">
                    @if ( $colClass != 'col-xl-4')
                    <div class="{{ $colClass }} col-lg-4 col-sm-6 fadeIn" data-aos="fade-right" data-aos-duration="1000" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="widget widget_about">
							<div class="footer-logo">
								<a href="index.html"><img src="/storage/images/footer-logo-white.png" alt=""></a> 
							</div>
						</div>
                    </div>    
                    @endif
                    <div class="{{ $colClass }} col-lg-4 col-sm-6" data-aos="fade-right" data-aos-duration="900">
                        <div class="widget widget_getintuch">
                            <h5 class="footer-title">{{ __('footer.contact') }}</h5>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt "></i>
                                    <span>Montréal, Canada<br>Conakry, Guinea</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>+1 514 710 6144<br>+224 622 517 070 </span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope "></i>
                                    <span>contact@gyom-tech.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="{{ $colClass }} col-lg-4 col-sm-6 " data-aos="fade-right" data-aos-duration="800">
                        <div class="widget widget_services style-1">
                            <h5 class="footer-title">{{ __('footer.quick_links') }}</h5>
                            <div class="row ms-3">
                                <ul class="col">
                                    <li><a href="{{route("home")}}">{{ __('Menus.home') }}</a></li>
                                    <li><a href="{{route("about")}}">{{ __('Menus.about') }}</a></li>
                                    <li><a href="{{route("services")}}">{{ __('Menus.services') }}</a></li>
                                </ul>
                                <ul class="col">
                                    <li><a href="{{route("projets")}}">{{ __('Menus.projets') }}</a></li>
                                    <li><a href="{{route("contact")}}">{{ __('Menus.contact') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $colClass }} col-lg-4 col-sm-6 " data-aos="fade-right" data-aos-duration="700">
                        <div class="widget widget_services style-1">
                            <h5 class="footer-title">{{ __('footer.follow_us') }}</h5>
                            <ul class="social-network">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-linkedin"></i>
                                <i class="fa-brands fa-github"></i>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="footer-bottom">
            <div class="col text-center" >
            {{__('footerMenu.droits-gauche')}}<a href="{{route('home')}} ">  GTS</a>.  {{__('footerMenu.droits-droite')}}.
        </div>
        </div>
    </div>
</footer>
