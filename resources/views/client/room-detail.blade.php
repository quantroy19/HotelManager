@extends('client.layout.app')
@section('title')
    
@endsection
@section('content')
<section class="hotel-details-area section-bg-2 pat-100 pab-100">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8 col-lg-7">
                <div class="details-left-wrapper">
                    <div class="details-contents bg-white radius-10">
                        <div class="details-contents-header">
                            <div class="details-contents-thumb details-contents-main-thumb bg-image"
                                style="background-image: url({{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/details_main.jpg')}});">
                            </div>
                        </div>
                        <div class="hotel-view-contents">
                            <div class="hotel-view-contents-header">
                                <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span
                                        class="hotel-view-contents-review-count"> (380) </span> </span>
                                <h3 class="hotel-view-contents-title"> King Suite Room </h3>
                                <div class="hotel-view-contents-location mt-2">
                                </div>
                            </div>
                            <div class="hotel-view-contents-middle">
                                <div class="hotel-view-contents-flex">
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-parking"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-wifi"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-coffee"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Breakfast </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-quidditch"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-swimming-pool"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-receipt"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-dumbbell"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                    </div>
                                </div>
                            </div>
                            <div class="hotel-view-contents-bottom">
                                <div class="hotel-view-contents-bottom-flex">
                                    <div class="hotel-view-contents-bottom-contents">
                                        <h4 class="hotel-view-contents-bottom-title"> $230 <sub>/Night</sub> </h4>
                                        <p class="hotel-view-contents-bottom-para"> (4 Nights, 2 Rooms, 4 Persons)
                                        </p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details-contents-tab">
                            <ul class="tabs details-tab details-tab-border">
                                <li class="active" data-tab="about"> About </li>
                                <li data-tab="reviews"> Reviews </li>
                            </ul>
                            <div id="about" class="tab-content-item active">
                                <div class="about-tab-contents">
                                    <p class="about-tab-contents-para"> One morning, when Gregor Samsa woke from
                                        troubled dreams, he found himself transformed in his bed into a horrible
                                        vermin. He lay on his armour-like back. </p>
                                    <p class="about-tab-contents-para mt-4"> He lifted his head a little he could
                                        see his brown belly, slightly domed and divided by arches into stiff
                                        sections. The bedding was hardly able to cover it and seemed ready to slide
                                        off any moment. His many legs,
                                        pitifully thin compared with the size of the rest of him. </p>
                                    <p class="about-tab-contents-para mt-4">
                                        So many legs pitifully thin compared with the size of the rest of him waved
                                        about helplessly as he looked What's happened to me. </p>
                                </div>
                            </div>
                            <div id="reviews" class="tab-content-item">
                                <div class="review-tab-contents">
                                    <div class="review-tab-contents-single">
                                        <div class="rating-wrap">
                                            <div class="ratings">
                                                <span class="hide-rating"></span>
                                                <span class="show-rating"></span>
                                            </div>
                                            <p> <span class="total-ratings">(167)</span></p>
                                        </div>
                                        <p class="about-review-para mt-3"> Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Sed a egestas leo. Aliquam ut ante lobortis tellus
                                            cursus pellentesque. Praesent feugiat tellus quis aliquet </p>
                                        <div class="review-tab-contents-author mt-4">
                                            <h4 class="review-tab-contents-author-name"> Sandra M. Hurt </h4>
                                            <p class="review-tab-contents-author-para mt-2"> TrustPilot </p>
                                        </div>
                                    </div>
                                    <div class="review-tab-contents-single">
                                        <div class="rating-wrap">
                                            <div class="ratings">
                                                <span class="hide-rating"></span>
                                                <span class="show-rating"></span>
                                            </div>
                                            <p> <span class="total-ratings">(236)</span></p>
                                        </div>
                                        <p class="about-review-para mt-3"> Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Sed a egestas leo. Aliquam ut ante lobortis tellus
                                            cursus pellentesque. Praesent feugiat tellus quis aliquet </p>
                                        <div class="review-tab-contents-author mt-4">
                                            <h4 class="review-tab-contents-author-name"> Robert Fox </h4>
                                            <p class="review-tab-contents-author-para mt-2"> Designer </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sticky-top">
                    <div class="hotel-details-widget hotel-details-widget-padding widget bg-white radius-10">
                        <div class="details-sidebar">
                            <div class="details-sidebar-dropdown custom-form">
                                <form action="#">
                                    <div class="single-input">
                                        <label class="details-sidebar-dropdown-title"> Check In </label>
                                        <input class="form--control date-picker" type="text" placeholder="Check in">
                                    </div>
                                    <div class="single-input mt-3">
                                        <label class="details-sidebar-dropdown-title"> Check Out </label>
                                        <input class="form--control date-picker" type="text"
                                            placeholder="Check out">
                                    </div>
                                </form>
                            </div>
                            <div class="details-sidebar-quantity pt-4">
                                <div class="details-sidebar-quantity-flex">
                                    <div class="details-sidebar-quantity-item">
                                        <h6 class="details-sidebar-quantity-title"> Guest </h6>
                                        <div class="details-sidebar-quantity-field">
                                            <span class="minus"><i class="las la-minus"></i></span><input
                                                class="quantity-input" type="number" value="5"><span class="plus"><i
                                                    class="las la-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="details-sidebar-quantity-item">
                                        <h6 class="details-sidebar-quantity-title"> Children </h6>
                                        <div class="details-sidebar-quantity-field">
                                            <span class="minus"><i class="las la-minus"></i></span><input
                                                class="quantity-input" type="number" value="3"><span class="plus"><i
                                                    class="las la-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="details-sidebar-quantity-item">
                                        <h6 class="details-sidebar-quantity-title"> Room </h6>
                                        <div class="details-sidebar-quantity-field">
                                            <span class="minus"><i class="las la-minus"></i></span><input
                                                class="quantity-input" type="number" value="2"><span class="plus"><i
                                                    class="las la-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapper mt-4">
                                <a href="checkout.html" class="cmn-btn btn-bg-1 btn-small"> Go to Checkout </a>
                            </div>
                        </div>
                    </div>
                    <div class="hotel-details-widget widget bg-white radius-10">
                        <div class="hotel-view">
                            <div class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                style="background-image: url({{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/hotel-grid1.jpg')}});">
                            </div>
                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span
                                            class="hotel-view-contents-review-count"> (380) </span> </span>
                                    <h3 class="hotel-view-contents-title"> King Suite Room </h3>
                                    <div class="hotel-view-contents-location mt-2">
                                        <span class="hotel-view-contents-location-icon"> <i
                                                class="las la-map-marker-alt"></i> </span>
                                        <span class="hotel-view-contents-location-para"> 4140 Parker Rd. Allentown,
                                            New Mexico 31134 </span>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-middle">
                                    <div class="hotel-view-contents-flex">
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Car Parking">
                                            <i class="las la-parking"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Free Wifi">
                                            <i class="las la-wifi"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Free Breakfast">
                                            <i class="las la-coffee"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Home Service">
                                            <i class="las la-quidditch"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Swimming Pool">
                                            <i class="las la-swimming-pool"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Reception">
                                            <i class="las la-receipt"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Gym">
                                            <i class="las la-dumbbell"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon">
                                            <a class="hotel-view-contents-icon-more" href="javascript:void(0)"> +8
                                                More </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-bottom">
                                    <div class="hotel-view-contents-bottom-flex">
                                        <div class="hotel-view-contents-bottom-contents">
                                            <h4 class="hotel-view-contents-bottom-title"> $230 <sub>/Night</sub>
                                            </h4>
                                            <p class="hotel-view-contents-bottom-para"> (4 Nights, 2 Rooms, 4
                                                Persons) </p>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve
                                                Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
