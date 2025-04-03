@extends('layouts.app')
@section('content')
    <section class="space mt-4">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">{{ App::getLocale() === 'ar' ? $category->name_ar : (App::getLocale() === 'fr' ? $category->name_fr : $category->name_en) }}</h2>
            </div>
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="search-form-area">
                            <form class="search-form"><input type="text" placeholder="Search"> <button type="submit"><i
                                        class="fa-light fa-magnifying-glass"></i></button></form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                            <div class="row gy-30">
                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="{{ asset('product.jpg') }}" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">YX-G High Speed Flat Embroidery Machine</a></h3>
                                            <div class="tour-action">
                                                <a href="contact.html" class="th-btn style4 th-icon">View Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="th-pagination text-center mt-60 mb-0">
                        <ul>
                            <li><a class="active" href="destination.html">1</a></li>
                            <li><a href="destination.html">2</a></li>
                            <li><a href="destination.html">3</a></li>
                            <li><a href="destination.html">4</a></li>
                            <li><a class="next-page" href="destination.html">Next <img
                                        src="assets/img/icon/arrow-right4.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area style2">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">{{__('custom.categories')}}</h3>
                            <ul>
                                @foreach($categories as $cat)
                                    <li>
                                        <a href="{{ url('category/'.$cat->slug) }}"><img src="{{ asset('storage/categories/'.$cat->image) }}" alt="">{{ App::getLocale() === 'ar' ? $cat->name_ar : (App::getLocale() === 'fr' ? $cat->name_fr : $cat->name_en) }}</a>
                                        <span>(8)</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
