
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

                <div class="header-nav @if($route==='blog') text-white @endif  navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header logo-dark">
                        <a href="{{ route('home') }}"><img src="/storage/images/header-logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar">
                        <li class="sub-menu {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">
                                <span>{{ __('menus.home') }}</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">
                                <span>{{ __('menus.about') }}</span>
                            </a>
                        </li>
                        {{-- <li class="sub-menu {{ request()->routeIs('blog') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}">
                                <span>{{ __('menus.blog') }}</span>
                            </a>
                        </li> --}}
                        <li class="sub-menu {{ request()->routeIs('services') ? 'active'  : '' }}">
                            <a href="{{ route('services') }}">
                                <span>{{ __('menus.services') }}</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('projets') ? 'active' : '' }}">
                            <a href="{{ route('projets') }}">
                                <span>{{ __('menus.projets') }}</span>
                            </a>
                        </li>
                        <li class="sub-menu {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">
                                <span>{{ __('menus.contact') }}</span>
                            </a>
                        </li>

                        <!-- Nav Item for Language Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @php
                                    $currentLanguage = app()->getLocale();
                                    $flagSrc = $currentLanguage === 'fr' ? '/storage/images/fr.jpeg' : '/storage/images/en.jpeg';
                                    $altText = $currentLanguage === 'fr' ? 'Drapeau FR' : 'Drapeau EN';
                                @endphp
                                <img src="{{ $flagSrc }}" alt="{{ $altText }}" style="width: 20px; margin-right: 10px;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <form action="{{ route('language.switch') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button class="dropdown-item" name="language" value="fr" type="submit">
                                            <img src="/storage/images/fr.jpeg" alt="Drapeau FR" style="width: 20px; margin-right: 10px;"> Français
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('language.switch') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button class="dropdown-item" name="language" value="en" type="submit">
                                            <img src="/storage/images/en.jpeg" alt="Drapeau EN" style="width: 20px; margin-right: 10px;"> English
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>   
                        <!-- Nav Item for Language Dropdown -->
                        


                    <div class="dlab-social-icon">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100093336522044&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>
