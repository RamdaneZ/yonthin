@extends('layouts.app')
@section('content')
<section class="space mt-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col-xxl-6 col-lg-6">
                <div class="tour-page-single">
                    <div class="slider-area tour-slider1">
                        <div class="swiper th-slider mb-4" id="tourSlider4"
                            data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product3.png') }}"
                                            alt="img"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product2.jpg') }}"
                                            alt="img"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product.jpg') }}"
                                            alt="img"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product2.jpg') }}"
                                            alt="img"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product.jpg') }}"
                                            alt="img"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product2.jpg') }}"
                                            alt="img"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper th-slider tour-thumb-slider"
                            data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":3},"576":{"slidesPerView":"4"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"5"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product3.png') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product2.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product2.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img"><img src="{{ asset('product2.jpg') }}"
                                            alt="Image"></div>
                                </div>
                            </div>
                        </div><button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img
                                src="assets/img/icon/hero-arrow-left.svg" alt=""></button> <button
                            data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img
                                src="assets/img/icon/hero-arrow-right.svg" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6 mt-4">
                <h3 class="tour-price">YX-G High Speed Flat Embroidery Machine</h3>
                <p class="box-text mb-30">voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                    voluptatem. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                    nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                    pariatur</p>
                <div class="checklist mb-50">
                    <ul>
                        <li>Visit most popular location of Maldives</li>
                        <li>Buffet Breakfast for all traveler with good quality.</li>
                        <li>Expert guide always guide you and give informations.</li>
                        <li>Best Hotel for all also great food.</li>
                        <li>Helping all traveler for Money Exchange.</li>
                        <li>Buffet Breakfast for all traveler with good quality..</li>
                        <li>Buffet Breakfast for all traveler with good quality.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-top-center position-relative overflow-hidden mt-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4" style="background: #ececec;">
                        <img src="{{ asset('logo-dark.png')}}" style="height:100%;object-fit:contain">
                    </div>
                    <div class="col-lg-8 ps-0">
                        <img src="{{ asset('product3.png')}}" style="width:100%;object-fit:cover;max-height:500px">
                        <div class="video-box3"><a href="https://www.youtube.com/watch?v=cQfIUPw72Dk"
                                class="play-btn popup-video" style="right:30%;top:50%"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
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
