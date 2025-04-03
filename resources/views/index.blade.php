
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
                                <a class="th-btn style1" href="{{ url('category/'.$category->slug) }}">See more</a>
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
                            <p class="contact-text2 text-white">Yonthin is a leading manufacturer of computerized embroidery machines circular knitting machines, and whole garment flat knitting machines.

                                We are dedicated to developing, manufacturing, and supplying innovative solutions tailored to your needs.
                                
                                On our website, we invite you to explore our advanced machines designed  for producing high-quality products, as well as specialized reinforcements.
                                
                                If you have any questions or need assistance, our dedicated team is here to help you.
                            </p>
                        </div><a href="{{ url('about') }}" class="th-btn style7 th-icon">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-box4"><a href="https://omo-oss-cdn.thefastfile.com/portal-saas/pg2024042513192795616/cms/vedio/d0889d5d-7998-4747-b107-6f07dabac207.mp4?sign=1743614748-5ac99d7019f3bfa39e068d8a6a4bbce3-0-c391e58a3a7da88fa42dbfb0b5abe59e&Expires=1743614748&Signature=tMTk39rEMY2EogppPp35YGVQJLjRpjsjWqWfj3~iYbb4U22UUeHO0lKGO2fuuO838xI2-JCVCoaXnDbiDaq6VO0mbAB2V8E1qwkZMzzlwjHjSWIO-9-qp-jB36CqSX~noJKOrmJMHEtNfKd91ov3tAdcOgNDLggUlPsKYz2UyZZhRfczuWHEMIBtp3fG7I-pdrwJcyDyNFAnr7lfsu6T~zzp67NRLu3ZBMD1WFn1fXP8BUzz~z200l28egfK8oJuABEGZo4rKSeble38KvGgI5OJw4VhKlgL1RqRWU6DmlSgOLeQkukksnM7w03qLIRE~hL4zsNoES1n3jsOSIt-PA&Key-Pair-Id=KITUBNZ25ERQX"
                            class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
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
