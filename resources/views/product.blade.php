@extends('layouts.app')
@section('content')
<section class="space mt-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col-xxl-5 col-lg-5">
                <div class="tour-page-single">
                    <div class="slider-area tour-slider1">
                        <div class="swiper th-slider mb-4" id="tourSlider4"
                            data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                @if($product->image)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image2)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image2) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image3)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image3) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image4)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image4) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image5)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image5) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image6)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image6) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            </div>                            
                        </div>
                        <div class="swiper th-slider tour-thumb-slider"
                            data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":3},"576":{"slidesPerView":"4"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"5"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                @if($product->image)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image2)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image2) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image3)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image3) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image4)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image4) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image5)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image5) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            
                                @if($product->image6)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ asset('storage/products/' . $product->image6) }}" alt="img">
                                        </div>
                                    </div>
                                @endif
                            </div>  
                        </div><button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img
                                src="assets/img/icon/hero-arrow-left.svg" alt=""></button> <button
                            data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img
                                src="assets/img/icon/hero-arrow-right.svg" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-lg-7 mt-4">
                <h3 class="tour-price">{{ App::getLocale() === 'ar' ? $product->name_ar : (App::getLocale() === 'fr' ? $product->name_fr : $product->name_en) }}</h3>
                <hr>
                <p class="box-text mb-30">{{ App::getLocale() === 'ar' ? $product->description_ar : (App::getLocale() === 'fr' ? $product->description_fr : $product->description_en) }}</p>
                <div class="checklist mb-50">
                    <ul>
                        @foreach($advantages as $advantage)
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" style="color:#f06011" width="32" height="32" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                </svg>
                                {{$advantage}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @if($product->video)
            <div class="bg-top-center position-relative overflow-hidden mt-4">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4" style="background: #ececec;">
                            <img src="{{ asset('logo-dark.png')}}" style="height:100%;object-fit:contain">
                        </div>
                        <div class="col-lg-8 ps-0" style="min-height: 400px">
                            <img src="{{ asset('storage/products/'.$product->image)}}" style="width:100%;object-fit:cover;max-height:500px;position: absolute;height:100%">
                            <div class="video-box3">
                                <a href="{{ asset('storage/products/videos/'.$product->video) }}"
                                    class="play-btn popup-video" style="right:30%;top:50%"><i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <section class="position-relative overflow-hidden space" id="service-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area text-center">
                            <h3 class="sec-title">What can I do with YONTHIN embroidery machine?</h3>
                            <p class="sec-text text-center" style="white-space: pre-wrap">Imagination is infinite, as long as it can fit into the embroidery frame, you can embroider.    
                                Using YONTHIN embroidery to make fashion, wedding dresses, children's clothing, home textiles, knitting, leather, etc.</p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('test.jpg')}}" alt="">
            </div>
        </section>
    </div>
</section>
@endsection
