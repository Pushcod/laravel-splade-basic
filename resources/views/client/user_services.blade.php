@extends('client.layout.layout')
@section('title') {{ __('Главная страница') }} @endsection

@section('content')

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Office Cleaning</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Office Cleaning</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="services-detail-section section-padding">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="services-image-wrap max-h-[400px]">
                        <img src="{{Storage::url($products->image)}}" class="services-image img-fluid max-w-[250px]" alt="">


                        <div class="services-icon-wrap">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-white mb-0">
                                    <i class="bi-cash me-2"></i>
                                    $820
                                </p>

                                <p class="text-white mb-0">
                                    <i class="bi-clock-fill me-2"></i>
                                    5 hrs
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="services-info px-4 pt-4">
                        <h2 class="mb-4">{{$products->title}}</h2>

                        <p>Please tell your friends about Tooplate's <a href="#">free HTML templates</a>. Thank you for choosing our templates for your work.</p>

                        <h6 class="mt-4">Affordable Service</h6>

                        <p>Clean Work is free Bootstrap v.5.1.3 HTML CSS template provided by Tooplate. You can use this layout for a commercial purpose.</p>

                        <h6>Expert Team</h6>

                        <p>You are not allowed to redistribute this clean work HTML template's <a href="#">downloadable ZIP file</a> on any other template website. Please contact us for more info. Thank you.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>


{{--    <section class="section-padding pt-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-12 col-12">--}}
{{--                    <h2 class="mb-4">Photo gallery</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-4 col-12">--}}
{{--                    <a href="assets/images/coronavirus-pandemic-disinfector-protective-suit-mask-sprays-disinfectants-house-office.jpg" class="image-popup">--}}
{{--                        <img src="assets/images/coronavirus-pandemic-disinfector-protective-suit-mask-sprays-disinfectants-house-office.jpg" class="gallery-image img-fluid">--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-4 col-12 my-4 my-lg-0 my-md-0">--}}
{{--                    <a href="assets/images/disinfecting-home.jpg" class="image-popup">--}}
{{--                        <img src="assets/images/disinfecting-home.jpg" class="gallery-image img-fluid">--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-4 col-12">--}}
{{--                    <a href="assets/images/essential-goods-during-epidemic-prevention-protection.jpg" class="image-popup">--}}
{{--                        <img src="assets/images/essential-goods-during-epidemic-prevention-protection.jpg" class="gallery-image img-fluid">--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="section-padding section-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-12 col-12">--}}
{{--                    <h2 class="mb-4">Related Services</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="services-thumb mb-lg-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-5 col-12">--}}
{{--                                <div class="services-image-wrap">--}}
{{--                                    <a href="services_detail">--}}
{{--                                        <img src="assets/images/services/man-polishing-car-inside-car-service.jpg" class="services-image img-fluid" alt="">--}}
{{--                                        <img src="assets/images/services/man-polishing-car-inside.jpg" class="services-image services-image-hover img-fluid" alt="">--}}

{{--                                        <div class="services-icon-wrap">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-cash me-2"></i>--}}
{{--                                                    $240--}}
{{--                                                </p>--}}

{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-clock-fill me-2"></i>--}}
{{--                                                    2 hrs--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">--}}
{{--                                <div class="services-info mt-4 mt-lg-0 mt-md-0">--}}
{{--                                    <h4 class="services-title mb-1 mb-lg-2">--}}
{{--                                        <a class="services-title-link" href="services_detail">Car Washing</a>--}}
{{--                                    </h4>--}}

{{--                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>--}}

{{--                                    <div class="d-flex flex-wrap align-items-center">--}}
{{--                                        <div class="reviews-icons">--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                        </div>--}}

{{--                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">--}}
{{--                                            <span>Learn More</span>--}}

{{--                                            <div class="marquee" aria-hidden="true">--}}
{{--                                                <div class="marquee__inner">--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 col-12">--}}
{{--                    <div class="services-thumb mb-lg-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-5 col-12">--}}
{{--                                <div class="services-image-wrap">--}}
{{--                                    <a href="services_detail">--}}
{{--                                        <img src="assets/images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg" class="services-image img-fluid" alt="">--}}
{{--                                        <img src="assets/images/services/close-up-mop-cleaning-industrial-plant-floor.jpg" class="services-image services-image-hover img-fluid" alt="">--}}

{{--                                        <div class="services-icon-wrap">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-cash me-2"></i>--}}
{{--                                                    $6,800--}}
{{--                                                </p>--}}

{{--                                                <p class="text-white mb-0">--}}
{{--                                                    <i class="bi-clock-fill me-2"></i>--}}
{{--                                                    30 hrs--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">--}}
{{--                                <div class="services-info mt-4 mt-lg-0 mt-md-0">--}}
{{--                                    <h4 class="services-title mb-1 mb-lg-2">--}}
{{--                                        <a class="services-title-link" href="services_detail">Factory Cleaning</a>--}}
{{--                                    </h4>--}}

{{--                                    <p>Best Cleaning Service Provider Ipsum dolor sit consectetur kengan</p>--}}

{{--                                    <div class="d-flex flex-wrap align-items-center">--}}
{{--                                        <div class="reviews-icons">--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star-fill"></i>--}}
{{--                                            <i class="bi-star"></i>--}}
{{--                                        </div>--}}

{{--                                        <a href="services_detail" class="custom-btn btn button button--atlas mt-2 ms-auto">--}}
{{--                                            <span>Learn More</span>--}}

{{--                                            <div class="marquee" aria-hidden="true">--}}
{{--                                                <div class="marquee__inner">--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                    <span>Learn More</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="partners-section">
        <div class="container">
            @forelse($partners as $partner)
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-12 col-12">
                    <h4 class="partners-section-title bg-white shadow-lg">Trusted by companies</h4>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="{{Storage::url($partner->image)}}" class="partners-image img-fluid">
                </div>

{{--                <div class="col-lg-2 col-md-4 col-6">--}}
{{--                    <img src="assets/images/partners/rolf-leasing.svg" class="partners-image img-fluid">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6">--}}
{{--                    <img src="assets/images/partners/woocommerce.svg" class="partners-image img-fluid">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6">--}}
{{--                    <img src="assets/images/partners/toprak-leasing.svg" class="partners-image img-fluid">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6">--}}
{{--                    <img src="assets/images/partners/unilabs.svg" class="partners-image img-fluid">--}}
{{--                </div>--}}

            </div>
            @empty
                {{ __('Партнеров нету дайте денег') }}
            @endforelse
        </div>
    </section>

@endsection
