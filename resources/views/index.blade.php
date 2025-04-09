
@extends('layouts.app')
@section('content')
    <div class="hero-12" id="hero">
        <div class="swiper th-slider overflow-hidden" id="heroSlide12"
            data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="th-hero-bg" data-bg-src="{{ asset('storage/sliders/'.$slider->image) }}"></div>
                            <div class="container">
                                <div class="hero-style12">
                                    <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.4s">
                                        {{ App::getLocale() === 'ar' ? $slider->title_ar : (App::getLocale() === 'fr' ? $slider->title_fr : $slider->title_en) }}
                                    </h1>
                                    <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">
                                        {{ App::getLocale() === 'ar' ? $slider->subtitle_ar : (App::getLocale() === 'fr' ? $slider->subtitle_fr : $slider->subtitle_en) }}
                                    </p>
                                    @if($slider->url)
                                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                            <a href="{{$slider->url}}" class="th-btn style1 th-icon">
                                                {{ App::getLocale() === 'ar' ? $slider->btnText_ar : (App::getLocale() === 'fr' ? $slider->btnText_fr : $slider->btnText_en) }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><button data-slider-prev="#heroSlide12" class="slider-arrow slider-prev"><img loading="lazy"
                src="assets/img/icon/right-arrow2.svg" alt=""></button> <button data-slider-next="#heroSlide12"
            class="slider-arrow slider-next"><img loading="lazy" src="assets/img/icon/left-arrow2.svg" alt=""></button>
    </div>

    <div class="counter-area space">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">{{__('custom.welcomeYonthin') }}</h2>
                <p>{{__('custom.welcomeSubtitle') }}</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body text-center">
                            <i class="fas fa-calendar-alt fa-2x mb-2 text-primary"></i>
                            <h3 class="box-number"><span class="counter-number">1989</span></h3>
                            <h6 class="counter-title">{{ __('custom.founded_in') }}</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body text-center">
                            <i class="fas fa-users fa-2x mb-2 text-success"></i>
                            <h3 class="box-number"><span class="counter-number">500</span></h3>
                            <h6 class="counter-title">{{ __('custom.employees') }}</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body text-center">
                            <i class="fas fa-lightbulb fa-2x mb-2 text-warning"></i>
                            <h3 class="box-number">+<span class="counter-number">160</span></h3>
                            <h6 class="counter-title">{{ __('custom.invention_patents') }}</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body text-center">
                            <i class="fas fa-industry fa-2x mb-2 text-danger"></i>
                            <h3 class="box-number">+<span class="counter-number">100</span>k</h3>
                            <h6 class="counter-title">{{ __('custom.factory_area') }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="destination-area13 position-relative overflow-hidden space-top">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">{{__('custom.whatWeOffer') }}</h2>
            </div>
            <div class="swiper th-slider has-shadow categorySlider" id="categorySlider1"
                data-slider-options='{"spaceBetween": "50","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3.2"}}}'>
                <div class="swiper-wrapper">
                    @foreach($categories as $category)
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img loading="lazy" src="{{asset('storage/categories/'.$category->image)}}" loading="lazy" alt="{{ App::getLocale() === 'ar' ? $category->name_ar : (App::getLocale() === 'fr' ? $category->name_fr : $category->name_en) }}">
                                </div>
                                <h3 class="box-title">
                                    <a href="{{ url('category/'.$category->slug) }}">{{ App::getLocale() === 'ar' ? $category->name_ar : (App::getLocale() === 'fr' ? $category->name_fr : $category->name_en) }}</a>
                                </h3>
                                <a class="th-btn style1" href="{{ url('category/'.$category->slug) }}">{{__('custom.see-more')}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>

    <div class="cantact-area6 position-relative overflow-hidden lazyload-bg" data-bg-src="{{ asset('about-img.webp') }}">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="text-center text-lg-start">
                        <div class="title-area pe-xl-5">
                            <h2 class="sec-title text-white">{{__('custom.about us') }}</h2>
                            <p class="contact-text2 text-white">{{ __('custom.about_text')}}</p>
                        </div><a href="{{ url('about') }}" class="th-btn style7 th-icon">{{__('custom.learn-more')}}</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-box4"><a href="https://omo-oss-cdn.thefastfile.com/portal-saas/pg2024042513192795616/cms/vedio/d0889d5d-7998-4747-b107-6f07dabac207.mp4?sign=1743614748-5ac99d7019f3bfa39e068d8a6a4bbce3-0-c391e58a3a7da88fa42dbfb0b5abe59e&Expires=1743614748&Signature=tMTk39rEMY2EogppPp35YGVQJLjRpjsjWqWfj3~iYbb4U22UUeHO0lKGO2fuuO838xI2-JCVCoaXnDbiDaq6VO0mbAB2V8E1qwkZMzzlwjHjSWIO-9-qp-jB36CqSX~noJKOrmJMHEtNfKd91ov3tAdcOgNDLggUlPsKYz2UyZZhRfczuWHEMIBtp3fG7I-pdrwJcyDyNFAnr7lfsu6T~zzp67NRLu3ZBMD1WFn1fXP8BUzz~z200l28egfK8oJuABEGZo4rKSeble38KvGgI5OJw4VhKlgL1RqRWU6DmlSgOLeQkukksnM7w03qLIRE~hL4zsNoES1n3jsOSIt-PA&Key-Pair-Id=KITUBNZ25ERQX"
                            class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    
     <div class="feature-area overflow-hidden space-bottom space" id="feature-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-area text-center">
                        <h2 class="sec-title">{{ __('custom.why_choose_us') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="row gy-4 justify-content-center">
            </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-item th-ani">
                        <div class="feature-item_icon">
                            <svg t="1660901844979" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4161" width="70" height="70" style="fill: #f06011;">
                                <path d="M853.333333 597.333333a108.8 108.8 0 1 0 108.373334 108.8A108.8 108.8 0 0 0 853.333333 597.333333z m-341.333333-336.64a109.226667 109.226667 0 1 0-108.373333-108.8A108.8 108.8 0 0 0 512 260.693333z m361.813333 270.506667a170.666667 170.666667 0 0 1 66.986667 23.04v-4.693333a432.213333 432.213333 0 0 0-256-393.813334 170.666667 170.666667 0 0 1-14.933333 67.413334 364.373333 364.373333 0 0 1 203.946666 308.053333z m-593.066666 173.653333A108.373333 108.373333 0 1 0 170.666667 813.653333a108.8 108.8 0 0 0 110.08-108.8z m-130.56-173.653333a365.226667 365.226667 0 0 1 202.24-308.48 167.253333 167.253333 0 0 1-14.933334-66.986667 432.213333 432.213333 0 0 0-256 393.813334A17.493333 17.493333 0 0 0 85.333333 554.666667a164.693333 164.693333 0 0 1 64.853334-23.466667z m361.813333 384a359.253333 359.253333 0 0 1-224-78.506667 172.8 172.8 0 0 1-61.44 35.413334 426.666667 426.666667 0 0 0 570.88 0 172.8 172.8 0 0 1-61.44-35.413334A359.253333 359.253333 0 0 1 512 914.346667z" p-id="4162"></path>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">{{ __('custom.feature_1_title') }}</h3>
                            <p class="feature-item_text">{{ __('custom.feature_1_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-item th-ani">
                        <div class="feature-item_icon">
                            <svg t="1681262033709" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3803" width="70" height="70" style="fill: #f06011;">
                                <path d="M851.2 464c32.8-33.6 52-76.8 52-124 0-101.6-90.4-184.8-200.8-184.8-3.2 0-6.4 0.8-9.6 0.8 3.2 4 8 9.6 11.2 14.4 16 20 27.2 40 35.2 64 48 14.4 101.6 56 101.6 104.8 0 43.2-28 83.2-70.4 100.8-16 5.6-27.2 18.4-27.2 34.4s12 29.6 28.8 34.4l8 1.6c107.2 24.8 181.6 112 181.6 214.4v28.8H904c5.6 24 8 40 8 65.6h72c22.4 0 40-16.8 40-36.8v-56.8c0-112.8-68-212-172.8-261.6z m-600 47.2l8-1.6c16.8-4.8 28.8-18.4 28.8-34.4 0-15.2-11.2-28.8-27.2-34.4-43.2-17.6-70.4-57.6-70.4-100.8 0-48.8 46.4-90.4 94.4-104.8 8.8-24 19.2-47.2 36-66.4 3.2-4 8-8 10.4-12-3.2 0-6.4-0.8-9.6-0.8-110.4 0-200.8 82.4-200.8 184.8 0 46.4 19.2 90.4 52 124C68 513.6 0 612.8 0 725.6v56.8c0 20.8 17.6 36.8 40 36.8h72c0-25.6 3.2-41.6 8-65.6H69.6v-28.8C69.6 624 144 536 251.2 511.2z" p-id="3804"></path><path d="M648.8 483.2c51.2-40.8 84-103.2 84-173.6C732.8 187.2 634.4 88 513.6 88c-121.6 0-220 99.2-220 220.8 0 70.4 32.8 133.6 84 173.6-135.2 54.4-230.4 187.2-230.4 342.4v73.6c0 20 16 36.8 36.8 36.8h658.4c20 0 36.8-16.8 36.8-36.8v-73.6c0-154.4-96-287.2-230.4-341.6zM368 308.8c0-80.8 65.6-146.4 145.6-146.4S659.2 228 659.2 308.8s-65.6 146.4-145.6 146.4c-80.8 0-145.6-65.6-145.6-146.4z m430.4 552H228v-36c0-158.4 128-288 285.6-288s284.8 128.8 284.8 288v36z" p-id="3805"></path>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">{{ __('custom.feature_2_title') }}</h3>
                            <p class="feature-item_text">{{ __('custom.feature_2_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-item th-ani">
                        <div class="feature-item_icon">
                            <svg t="1725261425738" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6652" width="70" height="70" style="fill: #f06011;">
                                <path d="M113.1 759.6h39c0 57.3 46.6 103.9 103.9 103.9s103.9-46.6 103.9-103.9h211.9c8.8 0 16-7.2 16-16V184.2c0-8.8-7.2-16-16-16H113.1c-8.8 0-16 7.2-16 16v559.4c0 8.8 7.2 16 16 16zM255.9 818c-32.2 0-58.4-26.2-58.4-58.4s26.2-58.4 58.4-58.4 58.4 26.2 58.4 58.4c0.1 32.2-26.1 58.4-58.4 58.4zM921.1 427.8L843 348.5c-3-3.1-7.1-4.8-11.4-4.8H640.8c-8.8 0-16 7.2-16 16v381.1c0 10.2 7.9 18.8 19.6 18.8h23.8c0 57.3 46.6 103.9 103.9 103.9 57.3 0 103.9-46.6 103.9-103.9h33.8c8.8 0 16-7.2 16-16V439.1c-0.1-4.2-1.7-8.3-4.7-11.3z m-224.3-26.6h111.3c4.3 0 8.4 1.7 11.4 4.8l45.6 46.3c2.9 3 4.6 7 4.6 11.2v98.9c0 8.8-7.2 16-16 16H696.8c-8.8 0-16-7.2-16-16V417.2c0-8.8 7.2-16 16-16zM772.1 818c-32.2 0-58.4-26.2-58.4-58.4s26.2-58.4 58.4-58.4 58.4 26.2 58.4 58.4-26.2 58.4-58.4 58.4z" p-id="6653"></path>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">{{ __('custom.feature_3_title') }}</h3>
                            <p class="feature-item_text">{{ __('custom.feature_3_text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-item th-ani">
                        <div class="feature-item_icon">
                            <svg t="1684908872687" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4449" width="70" height="70" style="fill: #f06011;">
                                <path d="M384 96H192a96 96 0 0 0-96 96v192a96 96 0 0 0 96 96h192a96 96 0 0 0 96-96V192a96 96 0 0 0-96-96z m32 288a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V192a32 32 0 0 1 32-32h192a32 32 0 0 1 32 32v192zM384 544H192a96 96 0 0 0-96 96v192a96 96 0 0 0 96 96h192a96 96 0 0 0 96-96v-192a96 96 0 0 0-96-96z m32 288a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32v-192a32 32 0 0 1 32-32h192a32 32 0 0 1 32 32v192zM832 544h-192a96 96 0 0 0-96 96v192a96 96 0 0 0 96 96h192a96 96 0 0 0 96-96v-192a96 96 0 0 0-96-96z m32 288a32 32 0 0 1-32 32h-192a32 32 0 0 1-32-32v-192a32 32 0 0 1 32-32h192a32 32 0 0 1 32 32v192z" p-id="4450"></path><path d="M736 288m-192 0a192 192 0 1 0 384 0 192 192 0 1 0-384 0Z" p-id="4451"></path>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">{{ __('custom.feature_4_title') }}</h3>
                            <p class="feature-item_text">{{ __('custom.feature_4_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lazyBgElements = document.querySelectorAll(".lazyload-bg");
        
            const lazyLoadBg = (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const bgSrc = element.getAttribute("data-bg-src");
                        if (bgSrc) {
                            element.style.backgroundImage = `url('${bgSrc}')`;
                            element.classList.add("bg-loaded"); // Optional: For styling purposes
                        }
                        observer.unobserve(element);
                    }
                });
            };
        
            const observer = new IntersectionObserver(lazyLoadBg, {
                rootMargin: "100px", // Load image slightly before it appears
                threshold: 0.1,
            });
        
            lazyBgElements.forEach((element) => {
                observer.observe(element);
            });
        });
    </script>

@endsection
