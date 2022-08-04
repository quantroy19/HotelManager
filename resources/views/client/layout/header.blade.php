<header class="header-style-01">
    <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
        <div class="container custom-container-one nav-container">
            <div class="logo-wrapper">
                <a href="index.html" class="logo">
                    <img src="{{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/logo.png') }}"
                        alt="">
                </a>
            </div>
            <div class="responsive-mobile-menu d-lg-none">
                <a href="javascript:void(0)" class="click-nav-right-icon">
                    <i class="las la-ellipsis-v"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#hotel_booking_menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="hotel_booking_menu">
                <ul class="navbar-nav">
                    <li><a href="">Home</a></li>
                    <li><a href="#"> About </a></li>
                    <li><a href="#"> Room </a></li>
                    <li><a href="#">Blog</a> </li>
                    <li><a href="#"> Contact Us </a></li>
                </ul>
            </div>
            @if (!Auth::check())
            <div class="navbar-right-content show-nav-content">
                <div class="single-right-content">
                    <div class="navbar-right-flex">
                        <div class="navbar-right-btn">
                            <a href="{{route('getLogin')}}"> Log In </a>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{route('form-register')}}" class="cmn-btn btn-bg-1 radius-10"> Sign Up </a>
                        </div>
                    </div>
                </div>
            </div> 
            @else
            <div class="navbar-right-content show-nav-content">
                <div class="single-right-content">
                    <div class="navbar-author">
                        <div class="navbar-author-flex">
                            <div class="navbar-author-thumb">
                                <img width="30px" height="30px" src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar):'bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/author.jpg' }}"
                                    alt="img">
                            </div>
                            <div class="navbar-author-name">
                                <h6 class="navbar-author-name-title">{{Auth::user()->name}} </h6>
                            </div>
                        </div>
                        <div class="navbar-author-wrapper">
                            <div class="navbar-author-wrapper-list">
                                <a href="#" class="navbar-author-wrapper-list-item"> Profile </a>
                                <a href="{{route('logout')}}" class="navbar-author-wrapper-list-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </nav>

</header>
