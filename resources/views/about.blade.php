
@extends('layouts.app')
@section('content')
<div class="about-area position-relative overflow-hidden overflow-hidden space mt-4" id="about-sec">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6">
                <div class="ps-xl-4">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">{{ __('custom.about_title') }}</h2>
                    </div>
                    <p style="max-height: 400px; overflow:auto">{{ __('custom.about_paragraph') }}</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="img-box3">
                    <div class="img3 movingX"><img src="{{ asset('about.jpg') }}" alt="Yonthin About"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overflow-hidden mb-4" id="gallery-sec">
    <div class="container-fuild">
        <div class="title-area mb-30 text-center">
            <h2 class="sec-title">{{__('custom.honor')}}</h2>
        </div>
        <div class="row gy-4 gallery-row4">
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/1.jpg') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/1.jpg') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/2.jpg') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/2.jpg') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/3.jpg') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/3.jpg') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/4.webp') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/4.webp') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/5.webp') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/5.webp') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/6.webp') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/6.webp') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/7.webp') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/7.webp') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="gallery-box style5">
                    <div class="gallery-img global-img">
                        <img src="{{ asset('assets/honor-images/8.webp') }}" alt="gallery image"> 
                        <a href="{{ asset('assets/honor-images/8.webp') }}" class="icon-btn popup-image">
                            <i class="fal fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
