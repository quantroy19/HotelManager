@extends('client.layout.app')
@section('title')
    
@endsection
@section('content')
<div class="banner-area banner-area-two banner-bg">
    <div class="banner-shapes">
      <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/banner/banner-shapes.png')}}" alt="shapes" />
      <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/banner/banner-shapes2.png')}}" alt="shapes" />
    </div>
    <div class="container">
      <div class="banner-area-flex">
        <div class="banner-single-content text-white">
          <h2 class="banner-single-content-title fw-700">
            Book our
            <span class="banner-single-content-title-shape">
              Hotels, Stays
            </span>
            for your next
            <span class="banner-single-content-title-shape star-shape">
              tour
            </span>
          </h2>
          <p class="banner-single-content-para mt-4">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do
            amet sint. Velit officia consequat duis enim.
          </p>
          <div class="banner-single-content-reviews mt-5">
            <span class="banner-single-content-reviews-icon">
              <i class="las la-star"></i>
            </span>
            <div class="banner-single-content-reviews-para">
              <span> 4.8/5(2380) </span>
              <span> Trustpilot reviews </span>
            </div>
          </div>
        </div>
        <div class="banner-thumb-wrap">
          <div class="banner-area-thumb">
            <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/banner/banner-man.png')}}" alt="" />
          </div>
          <div class="banner-thumb-shape">
            <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/banner/img-shape1.svg')}}" alt="shapes" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="location-area">
    <div class="container">
      <div class="banner-location bg-white radius-5">
        <div class="banner-location-flex">
          <div class="banner-location-single">
            <div class="banner-location-single-flex">
              <div class="banner-location-single-icon">
                <i class="las la-calendar"></i>
              </div>
              <div class="banner-location-single-contents">
                <span class="banner-location-single-contents-subtitle">
                  Check In
                </span>
                <div
                  class="banner-location-single-contents-dropdown custom-select"
                >
                  <select class="js-select select-style-two" name="state">
                    <option value="1">20 Jun 2022</option>
                    <option value="2">21 Jun 2022</option>
                    <option value="3">22 Jun 2022</option>
                    <option value="4">23 Jun 2022</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-location-single">
            <div class="banner-location-single-flex">
              <div class="banner-location-single-icon">
                <i class="las la-calendar"></i>
              </div>
              <div class="banner-location-single-contents">
                <span class="banner-location-single-contents-subtitle">
                  Check Out
                </span>
                <div
                  class="banner-location-single-contents-dropdown custom-select"
                >
                  <select class="js-select select-style-two" name="state">
                    <option value="1">20 Jul 2022</option>
                    <option value="2">21 Jul 2022</option>
                    <option value="3">22 Jul 2022</option>
                    <option value="4">23 Jul 2022</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-location-single">
            <div class="banner-location-single-flex">
              <div class="banner-location-single-icon">
                <i class="las la-user-friends"></i>
              </div>
              <div class="banner-location-single-contents">
                <span class="banner-location-single-contents-subtitle">
                  Person
                </span>
                <div
                  class="banner-location-single-contents-dropdown custom-select"
                >
                  <select class="js-select select-style-two" name="state">
                    <option value="1">2 People</option>
                    <option value="2">3 People</option>
                    <option value="3">4 People</option>
                    <option value="4">5 People</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-location-single">
            <div class="banner-location-single-flex">
              <div class="banner-location-single-icon">
                <i class="las la-user-friends"></i>
              </div>
              <div class="banner-location-single-contents">
                <span class="banner-location-single-contents-subtitle">
                  Children
                </span>
                <div
                  class="banner-location-single-contents-dropdown custom-select"
                >
                  <select class="js-select select-style-two" name="state">
                    <option value="1">2 Children</option>
                    <option value="2">3 Children</option>
                    <option value="3">4 Children</option>
                    <option value="4">5 Children</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-location-single-search">
            <div class="search-suggestions-wrapper">
              <div class="search-click-icon">
                <i class="las la-search"></i>
              </div>
              <div class="search-show">
                <div class="search-show-inner">
                  <form action="#">
                    <div class="search-show-form">
                      <input
                        autocomplete="off"
                        class="form--control"
                        id="search_form_input"
                        type="text"
                        placeholder="Search here...."
                      />
                      <button type="submit">
                        <i class="las la-search"></i>
                      </button>
                      <span class="suggestions-icon-close">
                        <i class="las la-times"></i>
                      </span>
                    </div>
                    <div class="search-product" id="search_suggestions_wrap">
                      <div class="search-product-inner">
                        <h6 class="search-product-title">
                          Product Suggestions
                        </h6>
                        <ul class="search-product-list mt-4">
                          <li class="search-product-list-item">
                            <a
                              href="javascript:void(0)"
                              class="search-product-list-link"
                            >
                              <div class="search-product-list-image">
                                <img
                                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/search_suggestion/s1.jpg')}}"
                                  alt="img"
                                />
                              </div>
                              <div class="search-product-list-info">
                                <div class="search-product-list-info-top">
                                  <h6 class="earch-product-list-info-title">
                                    Apple Original Air pod Collection for most
                                    popular and best price item in market
                                  </h6>
                                </div>
                                <div
                                  class="search-product-list-info-price mt-2"
                                >
                                  <div
                                    class="search-product-list-info-price-through"
                                  >
                                    <span class="flash-price"> $330.00 </span>
                                    <span class="old-price"> $300.00 </span>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="search-product-list-item">
                            <a
                              href="javascript:void(0)"
                              class="search-product-list-link"
                            >
                              <div class="search-product-list-image">
                                <img
                                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/search_suggestion/s2.jpg')}}"
                                  alt="img"
                                />
                              </div>
                              <div class="search-product-list-info">
                                <div class="search-product-list-info-top">
                                  <h6 class="earch-product-list-info-title">
                                    Apple Original Airpod Collection
                                  </h6>
                                </div>
                                <div
                                  class="search-product-list-info-price mt-2"
                                >
                                  <span class="main-price fw-500 color-light"
                                    >$269.00</span
                                  >
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="search-product-list-item">
                            <a
                              href="javascript:void(0)"
                              class="search-product-list-link"
                            >
                              <div class="search-product-list-image">
                                <img
                                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/search_suggestion/s3.jpg')}}"
                                  alt="img"
                                />
                              </div>
                              <div class="search-product-list-info">
                                <div class="search-product-list-info-top">
                                  <h6 class="earch-product-list-info-title">
                                    Apple Original Airpod Collection
                                  </h6>
                                </div>
                                <div
                                  class="search-product-list-info-price mt-2"
                                >
                                  <span class="main-price fw-500 color-light"
                                    >$499.00</span
                                  >
                                  <span class="stock-out"> Stock Out </span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="search-product-list-item">
                            <a
                              href="javascript:void(0)"
                              class="search-product-list-link"
                            >
                              <div class="search-product-list-image">
                                <img
                                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/search_suggestion/s4.jpg')}}"
                                  alt="img"
                                />
                              </div>
                              <div class="search-product-list-info">
                                <div class="search-product-list-info-top">
                                  <h6 class="earch-product-list-info-title">
                                    Apple Original Airpod Collection
                                  </h6>
                                </div>
                                <div
                                  class="search-product-list-info-price mt-2"
                                >
                                  <span class="main-price fw-500 color-light"
                                    >$499.00</span
                                  >
                                </div>
                              </div>
                            </a>
                          </li>
                          <li class="search-product-list-item">
                            <a
                              href="javascript:void(0)"
                              class="search-product-list-link"
                            >
                              <div class="search-product-list-image">
                                <img
                                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/search_suggestion/s5.jpg')}}"
                                  alt="img"
                                />
                              </div>
                              <div class="search-product-list-info">
                                <div class="search-product-list-info-top">
                                  <h6 class="earch-product-list-info-title">
                                    Apple Original Airpod Collection
                                  </h6>
                                </div>
                                <div
                                  class="search-product-list-info-price mt-2"
                                >
                                  <span class="main-price fw-500 color-light"
                                    >$499.00</span
                                  >
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="search-suggestion-overlay"></div>
          </div>
        </div>
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
          <div
            class="single-why-two bg-white single-why-two-border radius-10"
          >
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
          <div
            class="single-why-two bg-white single-why-two-border radius-10"
          >
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
          <div
            class="single-why-two bg-white single-why-two-border radius-10"
          >
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

  <section class="attraction-area pat-50 pab-50">
    <div class="container">
      <div class="section-title center-text">
        <h2 class="title">Nearby Attractions</h2>
        <div class="section-title-line"></div>
      </div>
      <div class="row mt-5">
        <div class="col-12">
          <div
            class="global-slick-init attraction-slider nav-style-one nav-color-two slider-inner-margin"
            data-infinite="true"
            data-arrows="true"
            data-dots="false"
            data-slidesToShow="4"
            data-swipeToSlide="true"
            data-autoplay="true"
            data-autoplaySpeed="2500"
            data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
            data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
            data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'
          >
            <div class="attraction-item">
              <div class="single-attraction-two radius-20">
                <div class="single-attraction-two-thumb">
                  <a
                    href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a5.jpg')}}"
                    class="gallery-popup"
                  >
                    <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a5.jpg')}}" alt="img" />
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
                  <a
                    href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg')}}"
                    class="gallery-popup"
                  >
                    <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg')}}" alt="img" />
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
                  <a
                    href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a7.jpg')}}"
                    class="gallery-popup"
                  >
                    <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a7.jpg')}}" alt="img" />
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
                  <a
                    href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a8.jpg')}}"
                    class="gallery-popup"
                  >
                    <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a8.jpg')}}" alt="img" />
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
                  <a
                    href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg')}}"
                    class="gallery-popup"
                  >
                    <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/attraction/a6.jpg')}}" alt="img" />
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

  <section class="guest-area pat-50 pab-50">
    <div class="container">
      <div class="section-title-three append-flex">
        <h2 class="title">Thoughts from our guests</h2>
        <div class="append-attraction append-color-two"></div>
      </div>
      <div class="row mt-5">
        <div class="col-12">
          <div
            class="global-slick-init guest-two-slider nav-style-one slider-inner-margin"
            data-appendArrows=".append-attraction"
            data-infinite="true"
            data-arrows="true"
            data-dots="false"
            data-slidesToShow="3"
            data-swipeToSlide="true"
            data-autoplay="true"
            data-autoplaySpeed="2500"
            data-prevArrow='<div class="prev-icon radius-parcent-50"><i class="las la-angle-left"></i></div>'
            data-nextArrow='<div class="next-icon radius-parcent-50"><i class="las la-angle-right"></i></div>'
            data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'
          >
            <div class="guest-two-item">
              <div class="single-guest-two single-guest-two-border radius-20">
                <div class="single-guest-two-flex">
                  <div class="single-guest-two-thumb">
                    <a href="javascript:void(0)">
                      <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/g1.jpg')}}" alt="img" />
                    </a>
                  </div>
                  <div class="single-guest-two-contents">
                    <h4 class="single-guest-two-contents-title">
                      <a href="javascript:void(0)"> Guy Hawkins </a>
                    </h4>
                    <div class="single-guest-two-contents-country">
                      <div class="single-guest-two-contents-country-flag">
                        <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/sweden.png')}}" alt="flag" />
                      </div>
                      <span class="single-guest-two-contents-country-name">
                        Sweden
                      </span>
                    </div>
                  </div>
                </div>
                <p class="single-guest-two-para mt-3">
                  Amet minim mollit non deserunt ullamco est sit aliq dolor do
                  amet sint. Velit officia consequat duis enilk velit mollit.
                </p>
              </div>
            </div>
            <div class="guest-two-item">
              <div class="single-guest-two single-guest-two-border radius-20">
                <div class="single-guest-two-flex">
                  <div class="single-guest-two-thumb">
                    <a href="javascript:void(0)">
                      <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/g2.jpg')}}" alt="img" />
                    </a>
                  </div>
                  <div class="single-guest-two-contents">
                    <h4 class="single-guest-two-contents-title">
                      <a href="javascript:void(0)"> Guy Hawkins </a>
                    </h4>
                    <div class="single-guest-two-contents-country">
                      <div class="single-guest-two-contents-country-flag">
                        <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/usa.png')}}" alt="flag" />
                      </div>
                      <span class="single-guest-two-contents-country-name">
                        USA
                      </span>
                    </div>
                  </div>
                </div>
                <p class="single-guest-two-para mt-3">
                  Amet minim mollit non deserunt ullamco est sit aliq dolor do
                  amet sint. Velit officia consequat duis enilk velit mollit.
                </p>
              </div>
            </div>
            <div class="guest-two-item">
              <div class="single-guest-two single-guest-two-border radius-20">
                <div class="single-guest-two-flex">
                  <div class="single-guest-two-thumb">
                    <a href="javascript:void(0)">
                      <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/g3.jpg')}}" alt="img" />
                    </a>
                  </div>
                  <div class="single-guest-two-contents">
                    <h4 class="single-guest-two-contents-title">
                      <a href="javascript:void(0)"> Guy Hawkins </a>
                    </h4>
                    <div class="single-guest-two-contents-country">
                      <div class="single-guest-two-contents-country-flag">
                        <img
                          src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/netherland.png')}}"
                          alt="flag"
                        />
                      </div>
                      <span class="single-guest-two-contents-country-name">
                        Netherland
                      </span>
                    </div>
                  </div>
                </div>
                <p class="single-guest-two-para mt-3">
                  Amet minim mollit non deserunt ullamco est sit aliq dolor do
                  amet sint. Velit officia consequat duis enilk velit mollit.
                </p>
              </div>
            </div>
            <div class="guest-two-item">
              <div class="single-guest-two single-guest-two-border radius-20">
                <div class="single-guest-two-flex">
                  <div class="single-guest-two-thumb">
                    <a href="javascript:void(0)">
                      <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/g2.jpg')}}" alt="img" />
                    </a>
                  </div>
                  <div class="single-guest-two-contents">
                    <h4 class="single-guest-two-contents-title">
                      <a href="javascript:void(0)"> Guy Hawkins </a>
                    </h4>
                    <div class="single-guest-two-contents-country">
                      <div class="single-guest-two-contents-country-flag">
                        <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/guest/usa.png')}}" alt="flag" />
                      </div>
                      <span class="single-guest-two-contents-country-name">
                        USA
                      </span>
                    </div>
                  </div>
                </div>
                <p class="single-guest-two-para">
                  Amet minim mollit non deserunt ullamco est sit aliq dolor do
                  amet sint. Velit officia consequat duis enilk velit mollit.
                </p>
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl1.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl1.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl2.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl2.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl3.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl3.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl4.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl4.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl5.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl5.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl6.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl6.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl7.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl7.jpg')}}" alt="img" />
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
              <a
                href="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl8.jpg')}}"
                class="gallery-popup-two"
              >
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/cl8.jpg')}}" alt="img" />
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

  <section class="blog-area pat-50 pab-50">
    <div class="container">
      <div class="section-title center-text">
        <h2 class="title">Latest News</h2>
        <div class="section-title-line"></div>
      </div>
      <div class="row gy-4 mt-4">
        <div class="col-xxl-4 col-lg-4 col-md-6">
          <div class="single-blog blog-two">
            <div class="single-blog-thumbs">
              <a href="blog_details.html">
                <img
                  class="lazyloads"
                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/blog/blog1.jpg')}}"
                  alt=""
                />
              </a>
              <div class="single-blog-thumbs-date">
                <a href="javascript:void(0)">
                  <span class="date"> 18 </span>
                  <span class="month"> Jun </span>
                </a>
              </div>
            </div>
            <div class="single-blog-contents mt-3">
              <div class="single-blog-contents-tags mt-3">
                <span class="single-blog-contents-tags-item">
                  <a href="javascript:void(0)">
                    <i class="las la-tag"></i> Hotel
                  </a>
                </span>
                <span class="single-blog-contents-tags-item">
                  <a href="javascript:void(0)"> 22 Comments </a>
                </span>
              </div>
              <h4 class="single-blog-contents-title mt-3">
                <a href="blog_details.html">
                  Great Deals to Send Your Loved Ones Somewhere Nice
                </a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6">
          <div class="single-blog blog-two">
            <div class="single-blog-thumbs">
              <a href="blog_details.html">
                <img
                  class="lazyloads"
                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/blog/blog2.jpg')}}"
                  alt=""
                />
              </a>
              <div class="single-blog-thumbs-date">
                <a href="javascript:void(0)">
                  <span class="date"> 19 </span>
                  <span class="month"> Jun </span>
                </a>
              </div>
            </div>
            <div class="single-blog-contents mt-3">
              <div class="single-blog-contents-tags mt-3">
                <span class="single-blog-contents-tags-item">
                  <a href="javascript:void(0)">
                    <i class="las la-tag"></i> Hotel
                  </a>
                </span>
                <span class="single-blog-contents-tags-item">
                  <a href="javascript:void(0)"> 25 Comments </a>
                </span>
              </div>
              <h4 class="single-blog-contents-title mt-3">
                <a href="blog_details.html">
                  Read Real Guest Reviews. 24/7 Customer Service and others.
                </a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6">
          <div class="single-blog blog-two">
            <div class="single-blog-thumbs">
              <a href="blog_details.html">
                <img
                  class="lazyloads"
                  src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/blog/blog3.jpg')}}"
                  alt=""
                />
              </a>
              <div class="single-blog-thumbs-date">
                <a href="javascript:void(0)">
                  <span class="date"> 20 </span>
                  <span class="month"> Jun </span>
                </a>
              </div>
            </div>
            <div class="single-blog-contents mt-3">
              <div class="single-blog-contents-tags mt-3">
                <span class="single-blog-contents-tags-item">
                  <a href="javascript:void(0)">
                    <i class="las la-tag"></i> Hotel
                  </a>
                </span>
                <span class="single-blog-contents-tags-item">
                  <a href="javascript:void(0)"> 12 Comments </a>
                </span>
              </div>
              <h4 class="single-blog-contents-title mt-3">
                <a href="blog_details.html">
                  Compare hotel prices and find an amazing price for the
                  Resort
                </a>
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
          <div
            class="global-slick-init attraction-slider slider-inner-margin"
            data-slidesToShow="6"
            data-infinite="true"
            data-arrows="false"
            data-dots="false"
            data-swipeToSlide="true"
            data-autoplay="true"
            data-autoplaySpeed="2500"
            data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
            data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
            data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576, "settings": {"slidesToShow": 2} }]'
          >
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo1.png')}}" alt="brandLogo" />
              </a>
            </div>
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo2.png')}}" alt="brandLogo" />
              </a>
            </div>
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo3.png')}}" alt="brandLogo" />
              </a>
            </div>
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo4.png')}}" alt="brandLogo" />
              </a>
            </div>
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo5.png')}}" alt="brandLogo" />
              </a>
            </div>
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo6.png')}}" alt="brandLogo" />
              </a>
            </div>
            <div class="single-brand">
              <a href="javascript:void(0)" class="single-brand-thumb">
                <img src="{{asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/logo3.png')}}" alt="brandLogo" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
