@extends('client.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('css/custom_client.css') }}">
@endsection
@section('content')
    <div class="banner-area banner-area  ">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $banner)
                    <div class="carousel-item {{ $loop->index == 1 ? 'active' : '' }}">
                        <img height="450rem" src="{{ Storage::url($banner->image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="location-area pat-90">
        <div class="container">
            <div class="banner-location bg-white radius-5">
                <form class="banner-location-flex" method="post" action="{{ route('postRoom') }}">
                    @csrf
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-calendar"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Check In </span>
                                <input class="form-control " name="checkin" id="from-picker" type="text"
                                    placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                                <i class="las la-calendar"></i>
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Check Out </span>
                                <input class="form-control " name="checkout" id="to-picker" type="text"
                                    placeholder="Check out">
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single">
                        <div class="banner-location-single-flex">
                            <div class="banner-location-single-icon">
                            </div>
                            <div class="banner-location-single-contents">
                                <span class="banner-location-single-contents-subtitle"> Category </span>
                                <select class="js-select select-style-two" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="banner-location-single-search">
                        <div class="search-suggestions-wrapper">
                            <button class="search-click-icon">
                                <i class="las la-search"></i>
                            </button>
                        </div>
                        <div class="search-suggestion-overlay"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="booking-two-area pat-100 pab-50">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="section-title-booking">
                        <div class="section-title-three">
                            <h2 class="title">What makes our hotels best than others?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-why-two bg-white single-why-two-border radius-10">
                        <div class="single-why-two-flex">
                            <div class="single-why-two-icon">
                                <i class="las la-thumbs-up"></i>
                            </div>
                            <div class="single-why-two-contents">
                                <h4 class="single-why-two-contents-title">
                                    <a href="javascript:void(0)"> Hassle Free Booking </a>
                                </h4>
                                <p class="single-why-two-contents-para mt-2">
                                    Book hotels from our website without any hassle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-why-two bg-white single-why-two-border radius-10">
                        <div class="single-why-two-flex">
                            <div class="single-why-two-icon">
                                <i class="las la-star"></i>
                            </div>
                            <div class="single-why-two-contents">
                                <h4 class="single-why-two-contents-title">
                                    <a href="javascript:void(0)"> 28,000 Reviews </a>
                                </h4>
                                <p class="single-why-two-contents-para mt-2">
                                    Book hotels from our website without any hassle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-why-two bg-white single-why-two-border radius-10">
                        <div class="single-why-two-flex">
                            <div class="single-why-two-icon">
                                <i class="las la-headset"></i>
                            </div>
                            <div class="single-why-two-contents">
                                <h4 class="single-why-two-contents-title">
                                    <a href="javascript:void(0)"> 24/7 Support </a>
                                </h4>
                                <p class="single-why-two-contents-para mt-2">
                                    Book hotels from our website without any hassle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Latest Rooms</h2>
                <div class="section-title-line"></div>
            </div>
            <div class="row gy-4 mt-4">
                @foreach ($rooms as $room)
                    <div class="col-xxl-3 col-lg-3 col-md-4">
                        <div class="single-blog blog-two">
                            <div class="single-blog-thumbs">
                                <a href="{{ route('room-detail', $room->id) }}">
                                    <img height="180rem" class="lazyloads" src="{{ Storage::url($room->image) }}"
                                        alt="" />
                                </a>
                            </div>
                            <div class="single-blog-contents mt-3">
                                <div class="single-blog-contents-tags mt-3">
                                    <span class="single-blog-contents-tags-item">
                                        <a href="javascript:void(0)">
                                            <i class="las la-tag"></i> {{ $room->category->name }}
                                        </a>
                                    </span>
                                </div>
                                <h4 class="single-blog-contents-title mt-3">
                                    <a href="{{ route('room-detail', $room->id) }}">
                                        {{ $room->name }}
                                    </a>
                                </h4>
                                <div class="hotel-view-contents-bottom-flex">
                                    <div class="hotel-view-contents-bottom-contents">
                                        <h6 class="hotel-view-contents-bottom">
                                            {{ number_format($room->price, 0, '.', ',') }}VND
                                            <sub>/day</sub>
                                        </h6>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="{{ route('room-detail', ['id' => $room->id]) }}"
                                            class="cmn-btn btn-bg-1 btn-small btn-outline-primary">
                                            Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Nearby Attractions</h2>
                <div class="section-title-line"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one nav-color-two slider-inner-margin"
                        data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="4"
                        data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a5.jpg') }}"
                                        class="gallery-popup">
                                        <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a5.jpg') }}"
                                            alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        <a href="hotel_details.html"> Eiffel Tower </a>
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        We have over 28K reviews to assure you top notch service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg') }}"
                                        class="gallery-popup">
                                        <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg') }}"
                                            alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        <a href="hotel_details.html"> Disneyland </a>
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        We have over 28K reviews to assure you top notch service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a7.jpg') }}"
                                        class="gallery-popup">
                                        <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a7.jpg') }}"
                                            alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        <a href="hotel_details.html"> Palace de justice </a>
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        We have over 28K reviews to assure you top notch service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a8.jpg') }}"
                                        class="gallery-popup">
                                        <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a8.jpg') }}"
                                            alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        <a href="hotel_details.html"> Arc de Trimorph </a>
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        We have over 28K reviews to assure you top notch service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction-two radius-20">
                                <div class="single-attraction-two-thumb">
                                    <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg') }}"
                                        class="gallery-popup">
                                        <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg') }}"
                                            alt="img" />
                                    </a>
                                </div>
                                <div class="single-attraction-two-contents">
                                    <h4 class="single-attraction-two-contents-title">
                                        <a href="hotel_details.html"> Disneyland </a>
                                    </h4>
                                    <p class="single-attraction-two-contents-para">
                                        We have over 28K reviews to assure you top notch service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title">Clicks around our hotels</h2>
                <div class="section-title-line"></div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl1.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl1.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Eiffel Tower </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl2.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl2.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Disneyland </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl3.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl3.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Palace de justice </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl4.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl4.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Arc de Trimorph </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl5.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl5.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Disneyland </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl6.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl6.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Disneyland </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl7.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl7.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Disneyland </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-attraction-two radius-20">
                        <div class="single-attraction-two-thumb">
                            <a href="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl8.jpg') }}"
                                class="gallery-popup-two">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl8.jpg') }}"
                                    alt="img" />
                            </a>
                        </div>
                        <div class="single-attraction-two-contents">
                            <h4 class="single-attraction-two-contents-title">
                                <a href="hotel_details.html"> Disneyland </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="brand-area pat-50 pab-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider slider-inner-margin" data-slidesToShow="6"
                        data-infinite="true" data-arrows="false" data-dots="false" data-swipeToSlide="true"
                        data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                        data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576, "settings": {"slidesToShow": 2} }]'>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo1.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo2.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo3.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo4.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo5.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo6.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo3.png') }}"
                                    alt="brandLogo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @parent
    <script>
        $(function() {
            var dateFormat = "mm/dd/yy",
                from = $("#from-picker")
                .datepicker({
                    minDate: 0,
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#to-picker").datepicker({
                    minDate: 0,
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>
@endsection
