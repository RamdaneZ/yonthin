
@extends('layouts.app')
@section('content')
<div class="space mt-4">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Contact Us</h2>
        </div>
        <div class="row flex-row-reverse justify-content-center align-items-center">
            <div class="col-lg-7">
                @if(session('success-msg'))
<h1>sucess</h1>
                @else
                    <div>
                        <form action="{{ url('sendmessage') }}" method="POST" class="contact-form style2">
                            @csrf
                            <h3 class="sec-title mb-30 text-capitalize">Fill your informations , our team is ready</h3>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"> <img src="assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"> <img src="assets/img/icon/mail.svg" alt="">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3"
                                        class="form-control" placeholder="Your Message">
                                    </textarea> 
                                    <img src="assets/img/icon/chat.svg" alt=""></div>
                                <div class="form-btn col-12 mt-24">
                                    <button class="th-btn style3">Send message <img src="assets/img/icon/plane.svg" alt=""></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="space mt-4">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid style2">
                    <div class="about-contact-icon"><img src="assets/img/icon/location-dot2.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Our Address</h6>
                        <p class="about-contact-details-text">{{$infos->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/call.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Phone Number</h6>
                        <p class="about-contact-details-text"><a href="tel:{{$infos->phone}}">{{$infos->phone}}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/mail.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">Email Address</h6>
                        <p class="about-contact-details-text"><a href="mailto:{{$infos->email}}">{{$infos->email}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
