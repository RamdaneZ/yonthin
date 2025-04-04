<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YONTHIN</title>
    <meta name="author" content="Yonthin">
    <meta name="description" content="Yonthin algerie">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <!-- Preconnect for faster font loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <!-- Google Fonts (combined request) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    
    <!-- Bootstrap (Preloaded for faster rendering) -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!-- FontAwesome (Deferred to prevent render-blocking) -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>-->
    
    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" media="print" onload="this.media='all'">
    
    <!-- Language-based Stylesheet -->
    <link rel="stylesheet" href="{{ asset(App::getLocale() == 'ar' ? 'assets/css/style rtl.css' : 'assets/css/style.css') }}">

</head>

<style>     
    .whatsappFixed{
        cursor: pointer;
        z-index: 999999999;
        width: 50px;
        height: 50px;
        background: #00cc5c;
        position: fixed;
        right: 25px;
        bottom: 30px;
        color: white;
        border-radius: 50%;
        padding:10px;
        animation: scaleUp 2s infinite linear;
    }
    
    .whatsappFixed svg{
        width: 100%;
        height: 100%;
        margin: auto;
        display: block;
    }
    
    @keyframes scaleUp {
        0%,100% {
            transform: scale(1);
        }
        
        50% {
            transform: scale(1.08);
        }
    }
</style>

<body>
    <div id="preloader" class="preloader">
        <div class="preloader-inner"><img src="{{ asset('logo-dark.png') }}" alt="YONTHIN" style="width:200px"></div>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="Y" class="characters">Y </span>
                    <span preloader-text="O" class="characters">O </span>
                    <span preloader-text="N" class="characters">N </span>
                    <span preloader-text="T" class="characters">T </span>
                    <span preloader-text="H" class="characters">H </span>
                    <span preloader-text="I" class="characters">I </span>
                    <span preloader-text="N" class="characters">N</span>
                </div>                
            </div>
        </div>
    </div>
    <div class="cursor-follower"></div>
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>
    @php
        $whatsappNumber = preg_replace('/[^0-9]/', '', "05521919191"); // Remove all non-numeric characters

        // Ensure the number starts with the country code
        if (substr($whatsappNumber, 0, 2) !== '213') { // Assuming Algeria (+213) as an example
            $whatsappNumber = '213' . $whatsappNumber; 
        }
    @endphp
    <a href="https://wa.me/{{$whatsappNumber}}" target=_blank class="whatsappFixed">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
        </svg>
    </a>
    <div class="sidemenu-wrapper sidemenu-info">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="th-widget-about">
                    <div class="about-logo"><a href="home-travel.html"><img src="{{ asset('logo.png') }}" alt="Tourm"></a>
                    </div>
                    <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital model.
                        Appropriately create interactive infrastructures</p>
                    <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                            href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                            href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                            href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img
                                    src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="blog.html"><i class="far fa-calendar"></i>24 Jun ,
                                    2025</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Where Vision Meets
                                    Concrete Reality</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img
                                    src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="blog.html"><i class="far fa-calendar"></i>22 Jun ,
                                    2025</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Raising the Bar in
                                    Construction.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                        <div class="details">
                            <p><a href="tel:+01234567890" class="info-box_link">+01 234 567 890</a></p>
                            <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                        <div class="details">
                            <p><a href="mailto:mailinfo00@tourm.com" class="info-box_link">mailinfo00@tourm.com</a></p>
                            <p><a href="mailto:support24@tourm.com" class="info-box_link">support24@tourm.com</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                        <div class="details">
                            <p>789 Inner Lane, Holy park, California, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ url('/') }}"><img src="{{ asset('logo-dark.png') }}" style="width:200px" alt="Yonthin"></a></div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="about.html">{{ __('custom.home')}}</a></li>
                    <li><a href="about.html">{{ __('custom.about')}}</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">{{ __('custom.categories')}}</a>
                        <ul class="sub-menu">
                            @foreach($navCategories as $navCategory)
                                <li><a href="{{ url('category/'.$navCategory->slug) }}">{{ App::getLocale() === 'ar' ? $navCategory->name_ar : (App::getLocale() === 'fr' ? $navCategory->name_fr : $navCategory->name_en) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="contact.html">{{ __('custom.contact')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout3 header-absolute">
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" alt="Yonthin" style="width:170px"></a>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center @if(App::getlocale() == "ar") ms-xl-auto @else me-xl-auto @endif">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li><a href="{{ url('/') }}">{{ __('custom.home')}}</a></li>
                                    <li><a href="{{ url('/about') }}">{{ __('custom.about')}}</a></li>
                                    <li class="menu-item-has-children">
                                    <a href="#">{{ __('custom.categories')}}</a>
                                    <ul class="mega-menu mega-menu-content">
                                        <li>
                                            <div class="container">
                                                <div class="row gy-4">
                                                    @foreach($navCategories as $navCategory)
                                                        <div class="col-lg-4">
                                                            <div class="mega-menu-box">
                                                                <a href="{{ url('category/'.$navCategory->slug) }}">
                                                                    <div class="mega-menu-img">
                                                                            <img src="{{ asset('storage/categories/'.$navCategory->image) }}" alt="{{$navCategory->name}}">
                                                                    </div>
                                                                </a>
                                                                <h3 class="mega-menu-title">
                                                                    <a href="{{ url('category/'.$navCategory->slug) }}">{{ App::getLocale() === 'ar' ? $navCategory->name_ar : (App::getLocale() === 'fr' ? $navCategory->name_fr : $navCategory->name_en) }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                    <li><a href="{{ url('contact') }}">{{__('custom.contact')}}</a></li>
                                </ul>
                            </nav>
                            <div class="header-button dropdown d-block d-xl-none">
                                <a class="dropdown-toggle text-white ms-2" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-top:-3px" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                    </svg> @if(App::getLocale() == "en") EN @elseif(App::getLocale() == "fr") FR @else عربية @endif
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="langDropdown" style="border-bottom: 4px solid #f06011;min-width:unset;border-radius:0">
                                    <li><a class="dropdown-item @if(App::getLocale() == "en") active @endif" href="{{ url('lang/en')}}">English</a></li>
                                    <li><a class="dropdown-item @if(App::getLocale() == "fr") active @endif" href="{{ url('lang/fr')}}">Français</a></li>
                                    <li><a class="dropdown-item @if(App::getLocale() == "ar") active @endif" href="{{ url('lang/ar')}}">العربية</a></li>
                                </ul>
                            </div>
                            <button type="button" class="th-menu-toggle d-block d-xl-none">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>

                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button dropdown">
                                <a class="dropdown-toggle text-white ms-2" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-top:-3px" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                    </svg> @if(App::getLocale() == "en") EN @elseif(App::getLocale() == "fr") FR @else عربية @endif
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="langDropdown" style="border-bottom: 4px solid #f06011;min-width:unset;border-radius:0">
                                    <li><a class="dropdown-item @if(App::getLocale() == "en") active @endif" href="{{ url('lang/en')}}">English</a></li>
                                    <li><a class="dropdown-item @if(App::getLocale() == "fr") active @endif" href="{{ url('lang/fr')}}">Français</a></li>
                                    <li><a class="dropdown-item @if(App::getLocale() == "ar") active @endif" href="{{ url('lang/ar')}}">العربية</a></li>
                                </ul>
                                <a href="{{ url('catalogue') }}" class="th-btn style3 th-icon">{{__('custom.catalogue')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-wrapper bg-title footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-white text-capitalize mb-0">get updated the latest
                                    newsletter</h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form style2"><input class="form-control" type="email"
                                        placeholder="Enter Email" required=""> <button type="submit"
                                        class="th-btn style1">Subscribe Now <img src="assets/img/icon/plane2.svg"
                                            alt=""></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href=""><img src="{{ asset('logo.png') }}" alt="yonthin" style="width:150px"></a></div>
                                <div class="th-social">
                                    @if($infos->facebook)
                                        <a href="{{$infos->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a> 
                                    @endif
                                    
                                    @if($infos->linkedin)
                                        <a href="{{$infos->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a> 
                                    @endif
                                    
                                    @if($infos->tiktok)
                                        <a href="{{$infos->tiktok}}" target="_blank"><i class="fab fa-tiktok"></i></a> 
                                    @endif
                                    
                                    @if($infos->instagram)
                                        <a href="{{$infos->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a> 
                                    @endif                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">{{__('custom.usefulLinks') }}</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ url('/') }}">{{__('custom.home')}}</a></li>
                                    <li><a href="{{ url('about') }}">{{__('custom.about')}}</a></li>
                                    <li><a href="{{ url('contact') }}">{{__('custom.contact')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">{{__('custom.categories')}}</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @foreach($navCategories as $navCategory)
                                        <li><a href="{{ url('category/'.$navCategory->slug) }}">{{ App::getLocale() === 'ar' ? $navCategory->name_ar : (App::getLocale() === 'fr' ? $navCategory->name_fr : $navCategory->name_en) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">{{__('custom.getInTouch')}}</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/phone.svg')}}" alt="img"></div>
                                    <div class="details">
                                        <p><a href="tel:{{$infos->phone}}" class="info-box_link">{{$infos->phone}}</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/envelope.svg')}}" alt="img"></div>
                                    <div class="details">
                                        <p><a href="mailto:{{$infos->email}}" class="info-box_link">{{$infos->email}}</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/location-dot.svg')}}" alt="img"></div>
                                    <div class="details">
                                        <p>{{$infos->address}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2025 <a>Yonthin</a>. All Rights
                            Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%"><img
                src="assets/img/shape/shape_8.png" alt="shape"></div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>

    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/matter.min.js') }}"></script>
    <script src="{{ asset('assets/js/matterjs-custom.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
        
</body>

</html>