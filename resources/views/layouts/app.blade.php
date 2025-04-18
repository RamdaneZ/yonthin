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
    
    <!-- Bootstrap (Preloaded and Loaded Early) -->
    <link rel="preload" as="style" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" media="print" onload="this.onload=null;this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" media="print" onload="this.onload=null;this.media='all'">
    
    <link rel="preload" as="style" href="{{ asset(App::getLocale() == 'ar' ? 'assets/css/new-style rtl2.min.css' : 'assets/css/new-style2.min.css') }}">
    <link rel="stylesheet" href="{{ asset(App::getLocale() == 'ar' ? 'assets/css/new-style rtl2.min.css' : 'assets/css/new-style2.min.css') }}">
</head>

<body>
    <!--<div id="preloader" class="preloader">
        <div class="preloader-inner"><img loading="lazy" src="{{ asset('logo-dark.webp') }}" alt="YONTHIN" width="200" height="110" style="object-fit:contain"></div>
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
    </div>-->

    @php
        $whatsappNumber = preg_replace('/[^0-9]/', '', $infos->whatsapp);

        if (substr($whatsappNumber, 0, 2) !== '213') {
            $whatsappNumber = '213' . $whatsappNumber; 
        }
    @endphp
    <a href="https://wa.me/{{$whatsappNumber}}" target=_blank class="whatsappFixed" aria-label="Contacter via WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
        </svg>
    </a>

    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle" aria-label="Ouvrir le menu"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ url('/') }}"><img loading="lazy" src="{{ asset('logo-dark.webp') }}" width="200" height="110" style="object-fit:contain" alt="Yonthin"></a></div>
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
                        <div class="col-auto px-0">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img loading="lazy" src="{{ asset('logo.svg') }}" alt="Yonthin" width="150" height="60" style="margin-top:-8px"></a>
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
                                                                        @php
                                                                            $imagePath = storage_path('app/public/categories/' . $navCategory->image);
                                                                            [$width, $height] = file_exists($imagePath) ? getimagesize($imagePath) : [null, null];
                                                                        @endphp
                                                                        
                                                                        <img 
                                                                            loading="lazy" 
                                                                            src="{{ asset('storage/categories/' . $navCategory->image) }}" 
                                                                            alt="{{ $navCategory->name }}" 
                                                                            width="{{ $width }}" 
                                                                            height="{{ $height }}" 
                                                                            style="object-fit: cover;">

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
                                <a class="dropdown-toggle text-white ms-2" type="button" id="langDropdown" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-top:-3px" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                    </svg> @if(App::getLocale() == "en") EN @elseif(App::getLocale() == "fr") FR @else عربية @endif
                                </a>
                                <ul class="dropdown-menu" style="border-bottom: 4px solid #f06011;min-width:unset;border-radius:0">
                                    <li><a class="dropdown-item @if(App::getLocale() == "en") active @endif" href="{{ url('lang/en')}}">English</a></li>
                                    <li><a class="dropdown-item @if(App::getLocale() == "fr") active @endif" href="{{ url('lang/fr')}}">Français</a></li>
                                    <li><a class="dropdown-item @if(App::getLocale() == "ar") active @endif" href="{{ url('lang/ar')}}">العربية</a></li>
                                </ul>
                            </div>
                            <button type="button" class="th-menu-toggle d-block d-xl-none" aria-label="Ouvrir le menu">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>

                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button dropdown">
                                <a class="dropdown-toggle text-white ms-2" type="button" id="langDropdown" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-top:-3px" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                    </svg> @if(App::getLocale() == "en") EN @elseif(App::getLocale() == "fr") FR @else عربية @endif
                                </a>
                                <ul class="dropdown-menu" style="border-bottom: 4px solid #f06011;min-width:unset;border-radius:0">
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
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href=""><img loading="lazy" src="{{ asset('logo.svg') }}" alt="yonthin"  width="150" height="60"></a></div>
                                <div class="th-social">
                                    @if($infos->facebook)
                                        <a href="{{ $infos->facebook }}" target="_blank" aria-label="Facebook">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                            </svg>
                                        </a>
                                    @endif
                                
                                    @if($infos->linkedin)
                                        <a href="{{ $infos->linkedin }}" target="_blank" aria-label="Linkedin">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                            </svg>
                                        </a>
                                    @endif
                                
                                    @if($infos->tiktok)
                                        <a href="{{ $infos->tiktok }}" target="_blank" aria-label="Tiktok">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                            </svg>
                                        </a>
                                    @endif
                                
                                    @if($infos->instagram)
                                        <a href="{{ $infos->instagram }}" target="_blank" aria-label="Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                            </svg>
                                        </a>
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
                                    <div class="icon"><img loading="lazy" src="{{ asset('assets/img/icon/phone.svg')}}" alt="img" width="25" height="25"></div>
                                    <div class="details">
                                        <p><a href="tel:{{$infos->phone}}" class="info-box_link">{{$infos->phone}}</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img loading="lazy" src="{{ asset('assets/img/icon/envelope.svg')}}" alt="img" width="25" height="25"></div>
                                    <div class="details">
                                        <p><a href="mailto:{{$infos->email}}" class="info-box_link">{{$infos->email}}</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img loading="lazy" src="{{ asset('assets/img/icon/location-dot.svg')}}" alt="img" width="25" height="25"></div>
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
                        <p class="copyright-text">{{ __('custom.copyright') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%"><img loading="lazy"
                src="assets/img/shape/shape_8.png" alt="shape"></div>
    </footer>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" fill="white" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute;width: 50%;height: 100%;left: 50%;top: 50%;transform: translate(-50%, -50%);color:#f06011" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
        </svg>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" defer></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}" defer></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>

</html>