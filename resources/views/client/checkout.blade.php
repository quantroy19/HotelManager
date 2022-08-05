@extends('client.layout.app')
@section('title')
    
@endsection
@section('content')
<section class="Checkout-area section-bg-2 pat-100 pab-100">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8 col-lg-7">
                <div class="checkout-wrapper">
                    <div class="checkout-single bg-white radius-10">
                        <h4 class="checkout-title"> Booking Information </h4>
                        <div class="checkout-contents mt-3">
                            <div class="checkout-form custom-form">
                                <form action="#">
                                    <div class="input-flex-item">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> First Name </label>
                                            <input class="form--control" type="text" name="name"
                                                placeholder="Type First Name">
                                        </div>
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Last Name </label>
                                            <input class="form--control" type="text" name="name"
                                                placeholder="Type Last Name">
                                        </div>
                                    </div>
                                    <div class="input-flex-item">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Mobile Number </label>
                                            <input class="form--control" id="phone" type="tel"
                                                placeholder="Type Mobile Number">
                                        </div>
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Email Address </label>
                                            <input class="form--control" type="text" name="email"
                                                placeholder="Type Email">
                                        </div>
                                    </div>
                                    <div class="input-flex-item">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Address </label>
                                            <input class="form--control" type="text" name="address"
                                                placeholder="Type Address">
                                        </div>
                                    </div>
                                    <div class="single-input mt-4">
                                        <label class="label-title"> Country </label>
                                        <div class="banner-location-single-contents-dropdown">
                                            <select class="js-select">
                                                <option value="1">Bangladesh</option>
                                                <option value="2">Pakistan</option>
                                                <option value="3">America</option>
                                                <option value="4">Russia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-flex-item">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> City/Town </label>
                                            <div class="banner-location-single-contents-dropdown">
                                                <select class="js-select">
                                                    <option value="1">Dhaka</option>
                                                    <option value="2">Karachi</option>
                                                    <option value="3">Washington</option>
                                                    <option value="4">Mosco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Zip Code </label>
                                            <div class="banner-location-single-contents-dropdown">
                                                <select class="js-select">
                                                    <option value="1">Rampura</option>
                                                    <option value="2">Farmgate</option>
                                                    <option value="3">Uttara</option>
                                                    <option value="4">Gulshan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-single bg-white radius-10">
                        <h4 class="checkout-title"> Payment </h4>
                        <div class="checkout-contents mt-4">
                            <div class="custom-radio custom-radio-inline">
                                <div class="custom-radio-single active">
                                    <input class="radio-input" type="radio" id="radio1" name="size"
                                        checked="checked">
                                    <label for="radio1"> <img src="assets/img/icons/card.svg" alt="card">
                                        Credit/Dabit Card</label>
                                </div>
                                <div class="custom-radio-single">
                                    <input class="radio-input" type="radio" name="size" id="radio2">
                                    <label for="radio2"> <img src="assets/img/icons/paypal.svg" alt="Paypal">
                                        Paypal</label>
                                </div>
                            </div>
                            <div class="checkout-form custom-form">
                                <form action="#">
                                    <div class="single-input mt-4">
                                        <label class="label-title"> Card Number </label>
                                        <input class="form--control input-padding-left" type="text" name="name"
                                            placeholder="Type Card Number">
                                        <div class="input-icon"> <img src="assets/img/icons/card.svg" alt="Icon">
                                        </div>
                                    </div>
                                    <div class="input-flex-item">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Expire Date </label>
                                            <input class="form--control input-padding-left date-picker"
                                                placeholder="Select Expire Date">
                                            <div class="input-icon"> <img src="assets/img/icons/calendar.svg"
                                                    alt="Icon"> </div>
                                        </div>
                                        <div class="single-input mt-4">
                                            <label class="label-title"> CVV/CVC </label>
                                            <input class="form--control input-padding-left" type="number"
                                                name="name" placeholder="Type CVV/CVC">
                                            <div class="input-icon"> <img src="assets/img/icons/cvc.svg" alt="Icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lock-contents mt-4">
                                        <div class="lock-contents-icon">
                                            <img src="assets/img/icons/lock.svg" alt="Icon">
                                        </div>
                                        <span class="lock-contents-para"> Information are encrypted with 256 bit SSL
                                        </span>
                                    </div>
                                    <div class="guaranty-cancellation radius-10 mt-4">
                                        <h4 class="guaranty-cancellation-title"> Guarantee & Cancellation </h4>
                                        <p class="guaranty-cancellation-para"> Cancel 12 hours before checking-in
                                            time for a Free Cancellation. </p>
                                    </div>
                                    <div class="checkbox-wrap mt-4">
                                        <div class="checkbox-inline">
                                            <input class="check-input" type="checkbox" id="agree">
                                            <label class="checkbox-label" for="agree"> I agree to the <a
                                                    href="javascript:void(0)">Terms & Conditions</a> of <a
                                                    href="javascript:void(0)">Beyond Hotels</a> </label>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Pay &
                                            Confirm </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sticky-top">
                    <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                        <div class="checkout-sidebar">
                            <h4 class="checkout-sidebar-title"> Booking Details </h4>
                            <div class="checkout-sidebar-contents">
                                <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                    <li class="list"> <span class="regular"> Checking In </span> <span
                                            class="strong"> 03 Jun 2022 </span> </li>
                                    <li class="list"> <span class="regular"> Checking Out </span> <span
                                            class="strong"> 06 Jun 2022 </span> </li>
                                    <li class="list"> <span class="regular"> Number of Rooms </span> <span
                                            class="strong"> 03 </span> </li>
                                    <li class="list"> <span class="regular"> Total Stay </span> <span
                                            class="strong"> 3 Nights, 2 Days </span> </li>
                                    <li class="list"> <span class="regular"> Number of Person </span> <span
                                            class="strong"> 5 Person </span> </li>
                                    <li class="list"> <span class="regular"> Number of Children </span> <span
                                            class="strong"> 2 Children </span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                        <div class="checkout-sidebar">
                            <h4 class="checkout-sidebar-title"> Invoice </h4>
                            <div class="checkout-sidebar-contents">
                                <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                    <li class="list"> <span class="regular"> Charge </span> <span class="strong">
                                            $230.00 </span> </li>
                                    <li class="list"> <span class="regular"> Discount </span> <span class="strong">
                                            -$8 </span> </li>
                                    <li class="list"> <span class="regular"> Vat </span> <span class="strong">
                                            (+13%) $20.08 </span> </li>
                                </ul>
                                <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                    <li class="list"> <span class="regular"> Total </span> <span
                                            class="strong color-one fs-20"> $250.08 </span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                        <div class="checkout-car-shape">
                            <img src="assets/img/single-page/car-shape.svg" alt="shapes">
                        </div>
                        <div class="checkout-sidebar">
                            <div class="checkout-sidebar-contents">
                                <div class="checkout-car center-text">
                                    <div class="checkout-car-thumb">
                                        <img src="assets/img/single-page/car.png" alt="img">
                                    </div>
                                    <div class="checkout-car-contents mt-4">
                                        <h4 class="checkout-car-contents-title"> Need a Car? </h4>
                                        <p class="checkout-car-contents-para mt-3"> Book luxury cars from Airport to
                                            our hotels at no hassle and with discounted price </p>
                                        <div class="btn-wrapper mt-4">
                                            <a href="javascript:void(0)" class="cmn-btn btn-bg-1"> Book Now </a>
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
