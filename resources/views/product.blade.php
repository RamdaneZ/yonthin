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
                                    @if ($product->image)
                                        <div class="swiper-slide">
                                            <div class="gallery-box style5">
                                                <div class="gallery-img global-img">
                                                    <img src="{{ asset('storage/products/' . $product->image) }}"
                                                        loading="lazy" alt="gallery image">
                                                    <a href="{{ asset('storage/products/' . $product->image) }}"
                                                        class="icon-btn popup-image">
                                                        <i class="fal fa-magnifying-glass-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image2)
                                        <div class="swiper-slide">
                                            <div class="gallery-box style5">
                                                <div class="gallery-img global-img">
                                                    <img src="{{ asset('storage/products/' . $product->image2) }}"
                                                        loading="lazy" alt="gallery image">
                                                    <a href="{{ asset('storage/products/' . $product->image2) }}"
                                                        class="icon-btn popup-image">
                                                        <i class="fal fa-magnifying-glass-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image3)
                                        <div class="swiper-slide">
                                            <div class="gallery-box style5">
                                                <div class="gallery-img global-img">
                                                    <img src="{{ asset('storage/products/' . $product->image3) }}"
                                                        loading="lazy" alt="gallery image">
                                                    <a href="{{ asset('storage/products/' . $product->image3) }}"
                                                        class="icon-btn popup-image">
                                                        <i class="fal fa-magnifying-glass-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image4)
                                        <div class="swiper-slide">
                                            <div class="gallery-box style5">
                                                <div class="gallery-img global-img">
                                                    <img src="{{ asset('storage/products/' . $product->image4) }}"
                                                        loading="lazy" alt="gallery image">
                                                    <a href="{{ asset('storage/products/' . $product->image4) }}"
                                                        class="icon-btn popup-image">
                                                        <i class="fal fa-magnifying-glass-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image5)
                                        <div class="swiper-slide">
                                            <div class="gallery-box style5">
                                                <div class="gallery-img global-img">
                                                    <img src="{{ asset('storage/products/' . $product->image5) }}"
                                                        loading="lazy" alt="gallery image">
                                                    <a href="{{ asset('storage/products/' . $product->image5) }}"
                                                        class="icon-btn popup-image">
                                                        <i class="fal fa-magnifying-glass-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image6)
                                        <div class="swiper-slide">
                                            <div class="gallery-box style5">
                                                <div class="gallery-img global-img">
                                                    <img src="{{ asset('storage/products/' . $product->image6) }}"
                                                        loading="lazy" alt="gallery image">
                                                    <a href="{{ asset('storage/products/' . $product->image6) }}"
                                                        class="icon-btn popup-image">
                                                        <i class="fal fa-magnifying-glass-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                            </div>
                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":3},"576":{"slidesPerView":"4"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"5"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    @if ($product->image)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image2)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/products/' . $product->image2) }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image3)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/products/' . $product->image3) }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image4)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/products/' . $product->image4) }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image5)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/products/' . $product->image5) }}"
                                                    alt="img">
                                            </div>
                                        </div>
                                    @endif

                                    @if ($product->image6)
                                        <div class="swiper-slide">
                                            <div class="tour-slider-img">
                                                <img src="{{ asset('storage/products/' . $product->image6) }}"
                                                    alt="img">
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
                    <h3 class="tour-price">
                        {{ App::getLocale() === 'ar' ? $product->name_ar : (App::getLocale() === 'fr' ? $product->name_fr : $product->name_en) }}
                    </h3>
                    <hr>
                    <p class="box-text mb-30" style="white-space: pre-line;">{{ App::getLocale() === 'ar' ? $product->description_ar : (App::getLocale() === 'fr' ? $product->description_fr : $product->description_en) }}</p>
                    @if($advantages)
                        <div class="checklist mb-50">
                            <ul>
                                @foreach ($advantages as $advantage)
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:#f06011" width="32"
                                            height="32" fill="currentColor" class="bi bi-check2-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                            <path
                                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                        </svg>
                                        {{ $advantage }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            @if ($product->video)
                <div class="bg-top-center position-relative overflow-hidden mt-4">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-4" style="background: #ececec;">
                                <img src="{{ asset('logo-dark.png') }}" style="height:100%;object-fit:contain">
                            </div>
                            <div class="col-lg-8 ps-0" style="min-height: 400px">
                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                    style="width:100%;object-fit:cover;max-height:500px;position: absolute;height:100%">
                                <div class="video-box3">
                                    <a href="{{ asset('storage/products/videos/' . $product->video) }}"
                                        class="play-btn popup-video" style="right:30%;top:50%"><i
                                            class="fa-sharp fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @php
                // Get the description based on the current locale
                $whatCanDoDescription = null;
            
                if (App::getLocale() === 'ar' && $product->whatCanDoSection_ar) {
                    $whatCanDoDescription = $product->whatCanDoSection_ar;
                } elseif (App::getLocale() === 'fr' && $product->whatCanDoSection_fr) {
                    $whatCanDoDescription = $product->whatCanDoSection_fr;
                } elseif (App::getLocale() === 'en' && $product->whatCanDoSection_en) {
                    $whatCanDoDescription = $product->whatCanDoSection_en;
                }
            @endphp
            
            @if($whatCanDoDescription || $product->whatCanDoSection_image)
                <section class="position-relative overflow-hidden space" id="service-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-area text-center">
                                    <h3 class="sec-title">What can I do with YONTHIN embroidery machine?</h3>
                                    @if($whatCanDoDescription)
                                        <p class="sec-text text-center" style="white-space: pre-line;line-height:18px">{{ $whatCanDoDescription }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if($product->whatCanDoSection_image)
                            <img src="{{ asset('storage/products/whatWeCanDoSection/'.$product->whatCanDoSection_image) }}" style="width:100%">
                        @endif
                    </div>
                </section>
            @endif
            @if($productFeatures != null)
                <div class="position-relative overflow-hidden">
                    <div class="container">
                        <div class="title-area text-center">
                            <h2 class="sec-title">Product Features</h2>
                        </div>
                        <table>
                            <colgroup>
                                <col style="width:100%;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td style="background-color:#E95C20;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="mt-3">
                                            @foreach($productFeatures as $productFeature)
                                                <li style="margin:15px 0">
                                                    <span style="font-size:18px;color:black">
                                                        <span>
                                                            {{ $productFeature }}
                                                        </span>
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif

            @foreach($product->tables as $productTable)
            <div class="position-relative overflow-hidden">
                <div class="container">
                    <div class="title-area text-center">
                        <h2 class="sec-title">
                            {{ App::getLocale() === 'ar' ? $productTable->name_ar : (App::getLocale() === 'fr' ? $productTable->name_fr : $productTable->name_en) }}
                        </h2>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                @foreach($productTable->columns as $column)
                                    <th style="background-color:#E95C20; color:white;">
                                        {{ App::getLocale() === 'ar' ? $column->name_ar : (App::getLocale() === 'fr' ? $column->name_fr : $column->name_en) }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $valueCount = $productTable->columns->first()->columnValues->count();
                            @endphp
        
                            @for ($i = 0; $i < $valueCount; $i++)
                                <tr>
                                    @foreach($productTable->columns as $column)
                                        @php
                                            $columnValue = $column->columnValues[$i] ?? null;
        
                                            $value = '';
                                            if ($columnValue) {
                                                $value = App::getLocale() === 'ar' ? $columnValue->value_ar :
                                                         (App::getLocale() === 'fr' ? $columnValue->value_fr : $columnValue->value_en);
                                            }
                                        @endphp
                                        <td>{{ $value }}</td>
                                    @endforeach
                                </tr>
                            @endfor
                        </tbody>
                    </table>
        
                </div>
            </div>
        @endforeach
        

            <div>
                <form action="{{ url('catalogue/store') }}" method="POST" class="contact-form style2">
                    @csrf
                    <h3 class="sec-title mb-30 text-capitalize">Fill your informations to get the catalogue</h3>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"> <img src="assets/img/icon/user.svg" alt="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"> <img src="assets/img/icon/mail.svg" alt="">
                        </div>
                        <div class="col-12 form-group">
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone"> <img src="assets/img/icon/phone.svg" alt="">
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="message" id="message" placeholder="Your message">
                            <img src="assets/img/icon/chat.svg" alt=""></div>
                        <div class="form-btn col-12 mt-24">
                            <button class="th-btn style3">Apply <img src="assets/img/icon/plane.svg" alt=""></button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </section>
@endsection
