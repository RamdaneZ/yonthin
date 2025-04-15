
@extends('layouts.app')
@section('content')
<div class="space mt-4">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">{{ __('custom.contact_us') }}</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid style2">
                    <div class="about-contact-icon"><img src="assets/img/icon/location-dot2.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">{{ __('custom.our_address') }}</h6>
                        <p class="about-contact-details-text">{{$infos->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/call.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">{{ __('custom.phone_number') }}</h6>
                        <p class="about-contact-details-text"><a href="tel:{{$infos->phone}}">{{$infos->phone}}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="assets/img/icon/mail.svg" alt=""></div>
                    <div class="about-contact-details">
                        <h6 class="box-title">{{ __('custom.email_address') }}</h6>
                        <p class="about-contact-details-text"><a href="mailto:{{$infos->email}}">{{$infos->email}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-1 mb-4">
    <div class="container">
        <div class="row flex-row-reverse justify-content-center align-items-center">
            <div class="col-lg-7 col-md-8">
                @if(session('success-msg'))
                    <div class="success-message-box text-center p-5 rounded shadow" style="background: #e6f9ed; border: 2px solid #2ecc71; color: #2ecc71;">
                        <svg xmlns="http://www.w3.org/2000/svg" alt="Success" style="width: 60px; margin-bottom: 15px; animation: pop 0.5s ease-out;" fill="currentColor" class="bi bi-send-check" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                        </svg>
                        <h2 class="mb-3" style="font-weight: bold;">{{ __('custom.thank_you') }}</h2>
                        <p style="font-size: 1.1rem;">
                            {{ __('custom.success_message') }} <br>
                            {{ __('custom.commercial_team_contact') }}
                        </p>
                        <a href="{{ url('/') }}" class="btn mt-4" style="background: #2ecc71; color: white; padding: 10px 25px; border-radius: 25px; text-decoration: none;">{{ __('custom.back_to_home') }}</a>
                    </div>
                
                    <style>
                        @keyframes pop {
                            0% {
                                transform: scale(0.5);
                                opacity: 0;
                            }
                            100% {
                                transform: scale(1);
                                opacity: 1;
                            }
                        }
                    </style>
                @else
                    <div>
                        <form action="{{ url('sendmessage') }}" method="POST" class="contact-form style2">
                            @csrf
                            <h3 class="sec-title mb-30 text-capitalize">{{ __('custom.contact_form_title') }}</h3>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('custom.name') }}"> <img src="assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('custom.email') }}"> <img src="assets/img/icon/mail.svg" alt="">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="phone" class="form-control" name="phone" id="phone" placeholder="{{ __('custom.phone') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: inline-block;position: absolute;right: 34px;top: 20px;height: 22px;width: 22px;" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                    </svg>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="address" id="name" placeholder="{{ __('custom.address') }}"> <img src="assets/img/icon/map.svg" alt="">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea> 
                                    <img src="assets/img/icon/chat.svg" alt=""></div>
                                <div class="form-btn col-12 mt-24">
                                    <button class="th-btn style3">{{ __('custom.send_message') }}<img src="assets/img/icon/plane.svg" alt=""></button>
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

@endsection
