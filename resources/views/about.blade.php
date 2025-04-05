
@extends('layouts.app')
@section('content')
<div class="about-area position-relative overflow-hidden overflow-hidden space mt-4" id="about-sec">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6">
                <div class="ps-xl-4">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">About YONTHIN Group</h2>
                    </div>
                    <p style="max-height: 400px;overflow:auto">
                        Fujian Yonthin Digital Control Technology Co.,Ltd. was established in 1989. It is a national key high-tech group enterprise that integrates production, learning, and research. For more than 30 years, Yongxin Technology has been committed to the CNC industry, mainly engaged in the research and development, production, and sales of computerized embroidery machines, large circular machines, high-end CNC sewing equipment, and integrated computerized horizontal machines. Its products are sold to more than 50 countries and regions around the world and are widely used in the fields of clothing, footwear, luggage, and other industries. It is a leading enterprise in China's sewing and textile equipment industry and was listed on the New Third Board in August 2014 with stock code 831122.

                        Relying on its strong resource advantages, professional business level, meticulous enterprise planning, meticulous process operation, and sincere service attitude, YONTHIN Technology has been awarded honors such as the National "Specialized, Refined, Unique and New" Little Giant Enterprise, National Intellectual Property Demonstration Enterprise, National Intellectual Property Advantage Enterprise, National High tech Enterprise, Fujian Province "Specialized, Refined, Unique and New" Small and Medium sized Enterprise, Fujian Province Science and Technology Little Giant Leading Enterprise, Fujian Province Science and Technology Enterprise, Fujian Province Innovative Enterprise, Fujian Province Famous Trademark Enterprise, Fujian Province Industry Spark Technology Innovation Center, Quanzhou City Engineering Technology Center, Quanzhou City Industry Technology Center, Fujian Province Innovation and Entrepreneurship Competition Third Prize, Quanzhou City Science and Technology Progress First Prize, and Shishi City Science and Technology Progress Award. Undertook and participated in over ten countries Provincial and municipal R&D projects have developed over ten series and thousands of models of products.

                        The company has long-term technical exchanges and cooperation with the Haixi Equipment Institute of the Chinese Academy of Sciences, Xiamen University, and Fuzhou University. Through various certifications, it has gathered a large number of computer software and hardware professionals and automation machinery talents. At the same time, it has established an electrical control research and development center, an embroidery machine research and development center, and a mechanical research and development center. It is a production and manufacturing enterprise of embroidery machines in China that integrates software and hardware. It is the largest, most technologically strong, and most well-equipped embroidery machine production and manufacturing enterprise in our province, and has obtained more than 20 invention patents, more than 100 utility model patents, and computer software copyrights.

                        Guided by the corporate philosophy of "integrity, innovation, and win-win", YONTHIN people constantly explore and innovate, adhere to keeping pace with the times, and make unremitting efforts to promote the development of China's knitting machinery towards intelligence.
                    </p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="img-box3">
                    <div class="img3 movingX"><img src="{{ asset('about.jpg') }}" alt="Yonthin about"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overflow-hidden mb-4" id="gallery-sec">
    <div class="container-fuild">
        <div class="title-area mb-30 text-center">
            <h2 class="sec-title">Honor</h2>
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
