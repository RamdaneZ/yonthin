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
                <div class="col-xxl-9 col-lg-9">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                            <div class="row gy-30">
                                @foreach($products as $product)
                                    <div class="col-xxl-4 col-xl-4 col-md-6">
                                        <div class="tour-box th-ani">
                                            <div class="tour-box_img global-img">
                                                <img src="{{ asset('storage/products/'.$product->image) }}" alt="image">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title"><a href="{{ url('product/'.$product->slug) }}">{{ App::getLocale() === 'ar' ? $product->name_ar : (App::getLocale() === 'fr' ? $product->name_fr : $product->name_en) }}</a></h3>
                                                <div class="tour-action">
                                                    <a href="{{ url('product/'.$product->slug) }}" class="th-btn style4 th-icon">View Product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
                
                <!-- Custom Pagination -->
                <div class="th-pagination text-center mt-60 mb-0">
                    <ul>
                        <!-- Previous Button -->
                        @if ($products->onFirstPage())
                            <li class="disabled"><a href="#">Previous</a></li>
                        @else
                            <li><a href="{{ $products->previousPageUrl() }}">Previous</a></li>
                        @endif
            
                        <!-- Page Numbers -->
                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li class="{{ $page == $products->currentPage() ? 'active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
            
                        <!-- Next Button -->
                        @if ($products->hasMorePages())
                            <li><a href="{{ $products->nextPageUrl() }}">Next <img src="assets/img/icon/arrow-right4.svg" alt=""></a></li>
                        @else
                            <li class="disabled"><a href="#">Next <img src="assets/img/icon/arrow-right4.svg" alt=""></a></li>
                        @endif
                    </ul>
                </div>
            </div>

                <div class="col-xxl-3 col-lg-3">
                    <aside class="sidebar-area style2">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">{{__('custom.categories')}}</h3>
                            <ul>
                                @foreach($categories as $cat)
                                    <li>
                                        <a href="{{ url('category/'.$cat->slug) }}">{{ App::getLocale() === 'ar' ? $cat->name_ar : (App::getLocale() === 'fr' ? $cat->name_fr : $cat->name_en) }}</a>
                                        <span>({{$cat->products_count()}})</span>
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
