
<header class="site-header header  @if($route === 'home') header-transparent @elseif($route === 'about') shadow @elseif($route==='blog') header mo-left header-transparent : '' @endif text-black mo-left" data-aos="fade-down" data-aos-duration="1000">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg ">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="logo-header logo-dark ">
                    <a href="{{route("home")}}"> @if($route==='blog') <img src="/storage/images/header-logo-white.png" alt=""> @else <img src="/storage/images/header-logo.png" alt="">  @endif</a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Extra Nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="{{route('contact')}} " class="btn btn-primary">Nous Contacter</a>
                    </div>
                </div>

                <div class="header-nav @if($route==='blog') text-white @endif  navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header logo-dark">
                        <a href="index.html"><img src="/storage/images/header-logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li class="sub-menu {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">
                                <span>À propos</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('blog') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}">
                                <span>blog</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('services') ? 'active'  : '' }}">
                            <a href="{{ route('services') }}">
                                <span>services</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('projets') ? 'active' : '' }}">
                            <a href="{{ route('projets') }}">
                                <span>projets</span>
                            </a>
                        </li>

                    </ul>
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
