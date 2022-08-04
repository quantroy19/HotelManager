@extends('client.layout.app')
@section('title')
    
@endsection
@section('content')
<div class="body-overlay"></div>
<div class="dashboard-area section-bg-2 dashboard-padding">
    <div class="container">
        <div class="dashboard-contents-wrapper">
            <div class="dashboard-icon">
                <div class="sidebar-icon">
                    <i class="las la-bars"></i>
                </div>
            </div>
            <div class="dashboard-left-content">
                <div class="dashboard-close-main">
                    <div class="close-bars"> <i class="las la-times"></i> </div>
                    <div class="dashboard-bottom">
                        <ul class="dashboard-list list-style-none">
                            <li class="list active">
                                <a href="dashboard.html"> <i class="las la-briefcase"></i> Dashboard </a>
                            </li>
                            <li class="list has-children">
                                <a href="javascript:void(0)"> <i class="las la-user-circle"></i> Profile </a>
                                <ul class="submenu list-style-none">
                                    <li class="list"> <a href="dashboard_profile.html"> Profile </a> </li>
                                    <li class="list"> <a href="dashboard_edit_profile.html"> Edit Profile </a> </li>
                                    <li class="list"> <a href="dashboard_pass_change.html"> Password Change </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list">
                                <a href="{{route('logout')}}"> <i class="las la-sign-out-alt"></i> Log Out </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dashboard-right-contents mt-4 mt-lg-0">
                <div class="dashboard-promo">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                            <div class="single-order">
                                <div class="single-order-flex">
                                    <div class="single-order-contents">
                                        <span class="single-order-contents-subtitle"> Pending Reservation </span>
                                        <h2 class="single-order-contents-title"> 02 </h2>
                                    </div>
                                    <div class="single-order-icon">
                                        <i class="las la-history"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                            <div class="single-order">
                                <div class="single-order-flex">
                                    <div class="single-order-contents">
                                        <span class="single-order-contents-subtitle"> Accepted Reservation </span>
                                        <h2 class="single-order-contents-title"> 32 </h2>
                                    </div>
                                    <div class="single-order-icon">
                                        <i class="las la-check-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                            <div class="single-order">
                                <div class="single-order-flex">
                                    <div class="single-order-contents">
                                        <span class="single-order-contents-subtitle"> Cancelled Reservation </span>
                                        <h2 class="single-order-contents-title"> 08 </h2>
                                    </div>
                                    <div class="single-order-icon">
                                        <i class="las la-times-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                            <div class="single-order">
                                <div class="single-order-contents">
                                    <span class="single-order-contents-subtitle"> Completed Reservation </span>
                                    <h2 class="single-order-contents-title">38 </h2>
                                </div>
                                <div class="single-order-icon">
                                    <i class="las la-clipboard-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-reservation">
                    <div class="single-reservation bg-white base-padding show open">
                        <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                        <div class="single-reservation-head">
                            <div class="single-reservation-flex">
                                <div class="single-reservation-content">
                                    <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                    <span class="single-reservation-content-id"> #824409583563 </span>
                                </div>
                                <div class="single-reservation-btn">
                                    <a href="javascript:void(0)" class="dash-btn btn-pending"> Pending </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation-inner">
                            <div class="single-reservation-item">
                                <div class="single-reservation-name">
                                    <h5 class="single-reservation-name-title"> Nelson Norman </h5>
                                    <p class="single-reservation-name-para"> (208) 555-0112 · 8502 Preston Rd.
                                        Inglewood, Maine 98380 </p>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-details">
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Check in </span>
                                        <h5 class="single-reservation-details-title"> 10:30 AM, 23 Jun 22 </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Check Out </span>
                                        <h5 class="single-reservation-details-title"> 10:30 AM, 28 Jun 22 </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Guests & Rooms </span>
                                        <h5 class="single-reservation-details-title"> 4 Adults, 2 Children, 3 Rooms
                                        </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Booked </span>
                                        <h5 class="single-reservation-details-title"> 28 Jun 22 </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Total Bill </h5>
                                        <span class="single-reservation-content-price"> $250 </span>
                                    </div>
                                    <div class="single-reservation-logoPrice">
                                        <span class="single-reservation-logoPrice-thumb">
                                            <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/dashboard/mslogo.png')}}" alt="img">
                                        </span>
                                        <span class="single-reservation-logoPrice-code"> ***9320 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-name">
                                        <h5 class="single-reservation-name-title"> Beyond Hotel </h5>
                                        <p class="single-reservation-name-para"> 4140 Parker Rd. Allentown, New
                                            Mexico 31134 </p>
                                    </div>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn popup-click"> <i
                                                class="las la-exclamation-circle"></i> Cancel? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-reservation bg-white base-padding">
                        <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                        <div class="single-reservation-head">
                            <div class="single-reservation-flex">
                                <div class="single-reservation-content">
                                    <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                    <span class="single-reservation-content-id"> #824409583563 </span>
                                </div>
                                <div class="single-reservation-btn">
                                    <a href="javascript:void(0)" class="dash-btn btn-cancelled"> Cancelled </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation-inner">
                            <div class="single-reservation-item">
                                <div class="single-reservation-name">
                                    <h5 class="single-reservation-name-title"> Nelson Norman </h5>
                                    <p class="single-reservation-name-para"> (208) 555-0112 · 8502 Preston Rd.
                                        Inglewood, Maine 98380 </p>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-details">
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Check in </span>
                                        <h5 class="single-reservation-details-title"> 10:30 AM, 23 Jun 22 </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Check Out </span>
                                        <h5 class="single-reservation-details-title"> 10:30 AM, 28 Jun 22 </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Guests & Rooms </span>
                                        <h5 class="single-reservation-details-title"> 4 Adults, 2 Children, 3 Rooms
                                        </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Booked </span>
                                        <h5 class="single-reservation-details-title"> 28 Jun 22 </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Total Bill </h5>
                                        <span class="single-reservation-content-price"> $280 </span>
                                    </div>
                                    <div class="single-reservation-logoPrice">
                                        <span class="single-reservation-logoPrice-thumb">
                                            <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/dashboard/mslogo.png')}}" alt="img">
                                        </span>
                                        <span class="single-reservation-logoPrice-code"> ***9520 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-name">
                                        <h5 class="single-reservation-name-title"> Beyond Hotel </h5>
                                        <p class="single-reservation-name-para"> 4140 Parker Rd. Allentown, New
                                            Mexico 31134 </p>
                                    </div>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn popup-click"> <i
                                                class="las la-exclamation-circle"></i> Cancel? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-reservation bg-white base-padding">
                        <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                        <div class="single-reservation-head">
                            <div class="single-reservation-flex">
                                <div class="single-reservation-content">
                                    <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                    <span class="single-reservation-content-id"> #82443454765 </span>
                                </div>
                                <div class="single-reservation-btn">
                                    <a href="javascript:void(0)" class="dash-btn btn-pending"> Pending </a>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation-inner">
                            <div class="single-reservation-item">
                                <div class="single-reservation-name">
                                    <h5 class="single-reservation-name-title"> Nelson Norman </h5>
                                    <p class="single-reservation-name-para"> (208) 555-0112 · 8502 Preston Rd.
                                        Inglewood, Maine 98380 </p>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-details">
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Check in </span>
                                        <h5 class="single-reservation-details-title"> 10:30 AM, 23 Jun 22 </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Check Out </span>
                                        <h5 class="single-reservation-details-title"> 10:30 AM, 28 Jun 22 </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Guests & Rooms </span>
                                        <h5 class="single-reservation-details-title"> 4 Adults, 2 Children, 3 Rooms
                                        </h5>
                                    </div>
                                    <div class="single-reservation-details-item">
                                        <span class="single-reservation-details-subtitle"> Booked </span>
                                        <h5 class="single-reservation-details-title"> 28 Jun 22 </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Total Bill </h5>
                                        <span class="single-reservation-content-price"> $280 </span>
                                    </div>
                                    <div class="single-reservation-logoPrice">
                                        <span class="single-reservation-logoPrice-thumb">
                                            <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/dashboard/mslogo.png')}}" alt="img">
                                        </span>
                                        <span class="single-reservation-logoPrice-code"> ***9520 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-name">
                                        <h5 class="single-reservation-name-title"> Beyond Hotel </h5>
                                        <p class="single-reservation-name-para"> 4140 Parker Rd. Allentown, New
                                            Mexico 31134 </p>
                                    </div>
                                    <div class="single-reservation-btn">
                                        <a href="javascript:void(0)" class="dash-btn popup-click"> <i
                                                class="las la-exclamation-circle"></i> Cancel? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="pagination-wrapper">
                            <ul class="pagination-list list-style-none">
                                <li class="pagination-list-item-prev">
                                    <a href="javascript:void(0)" class="pagination-list-item-button"> Prev </a>
                                </li>
                                <li class="pagination-list-item">
                                    <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                                </li>
                                <li class="pagination-list-item">
                                    <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                                </li>
                                <li class="pagination-list-item">
                                    <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                                </li>
                                <li class="pagination-list-item">
                                    <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                                </li>
                                <li class="pagination-list-item active">
                                    <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                                </li>
                                <li class="pagination-list-item-next">
                                    <a href="javascript:void(0)" class="pagination-list-item-button"> Next </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="popup-overlay"></div>
<div class="popup-fixed">
    <div class="popup-contents popup-cancell-modal">
        <h2 class="popup-contents-title"> Why do you want to cancel? </h2>
        <div class="popup-contents-select">
            <label class="popup-contents-select-label"> Choose a reason </label>
            <div class="js-select">
                <select>
                    <option value="1">Don't want to Book</option>
                    <option value="2">Booked Accidentally</option>
                    <option value="3">Don't want to Book</option>
                </select>
            </div>
        </div>
        <div class="popup-contents-btn flex-btn">
            <a href="javascript:void(0)" class="dash-btn popup-close"> <i class="las la-arrow-left"></i> Go Back
            </a>
            <a href="javascript:void(0)" class="dash-btn btn-cancelled popup-close"> Cancel </a>
        </div>
    </div>
</div>
@endsection