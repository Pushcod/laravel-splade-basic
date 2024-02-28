@extends('client.layout.layout')
@section('title') {{ __('Главная страница') }} @endsection

@section('content')

    <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <h1 class="text-white mb-lg-0">Отзыв</h1>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">review</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                    <h2 class="my-3">We're happy to help</h2>

                    <p>Best Cleaning Service is ready to serve you. Clean Work is a professional website layout for your business.</p>

                    <div class="contact-info bg-white shadow-lg">
                        <h3 class="mb-4">Contact Information</h3>

                        <h5 class="d-flex mt-3 mb-3">
                            <i class="bi-geo-alt-fill custom-icon me-3"></i>
                            Akershusstranda 20, 0150 Oslo, Norway
                        </h5>

                        <h5 class="d-flex mb-3">
                            <i class="bi-telephone-fill custom-icon me-3"></i>

                            <a href="tel: 110-220-9800">
                                110-220-9800
                            </a>
                        </h5>

                        <h5 class="d-flex">
                            <i class="bi-envelope-fill custom-icon me-3"></i>

                            <a href="mailto:info@company.com">
                                info@company.com
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" action="{{route('client.ReviewStore')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="consulting-form-header d-flex align-items-center">
                            <h3 class="mb-4">Leave your review</h3>
                        </div>

                        <div class="consulting-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" id="volunteer-name" class="form-control" placeholder="John Walker" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="file" name="image"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="yours@gmail.com" required>
                                </div>
                            </div>

                            <select class="form-select form-control" name="rating"  aria-label="Default select example">
                                <option value="0">{{__('нет оценок')}}</option>
                                <option value="1">{{__('⭐')}}</option>
                                <option value="2">{{__('⭐⭐')}}</option>
                                <option value="3">{{__('⭐⭐⭐')}}</option>
                                <option value="4">{{__('⭐⭐⭐⭐')}}</option>
                                <option value="5">{{__('⭐⭐⭐⭐⭐')}}</option>
                            </select>

                            <textarea name="text" rows="3" class="form-control"  placeholder="Comment (Optional)"></textarea>

                            <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
