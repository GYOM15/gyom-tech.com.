
<header class="site-header header  @if($route === 'home' || $route === 'blog' ) header-transparent @endif text-black mo-left">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg ">
        <div class="main-bar clearfix ">
            <div class="container clearfix">

                <!-- Website Logo -->
                <div class="logo-header logo-dark ">
                    <a href="index.html"><img src="/storage/images/logo.png" alt=""></a>
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
                        <a href="contact-us-2.html" class="btn btn-primary">Get A Quote <i class="fa fa-angle-right m-l10"></i></a>
                    </div>
                </div>

                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header logo-dark">
                        <a href="index.html"><img src="/storage/images/logo-4.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li class="sub-menu {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">
                                <span>about</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('blog') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}">
                                <span>blog</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('services') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">
                                <span>services</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('projets') ? 'active' : '' }}">
                            <a href="{{ route('projets') }}">
                                <span>projets</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">
                                <span>contact</span>
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
