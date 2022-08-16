@extends('client.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('css/custom_client.css') }}">
@endsection
@section('content')
    <section class="hotel-list-area section-bg-2 pat-50 pab-100">
        <div class="container">
            <div class="banner-location bg-white radius-10">
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
            <div class="shop-contents-wrapper mt-5">
                <div class="shop-icon">
                    <div class="shop-icon-sidebar">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="shop-sidebar-content">
                    <div class="shop-close-content">
                        <div class="shop-close-content-icon"> <i class="las la-times"></i> </div>
                        <div class="single-shop-left bg-white radius-10">
                            <div class="single-shop-left-title open">
                                <h5 class="title"> Prices </h5>
                                <div class="single-shop-left-inner mt-4 ">
                                    <form class="price-range-slider" method="post" data-start-min="{{ $priceMin }}"
                                        data-start-max="{{ $priceMax }}" data-min="{{ $priceMin }}"
                                        data-max="{{ $priceMax }}" data-step="10000">
                                        <div class="ui-range-slider"></div>
                                        <div class="ui-range-slider-footer">
                                            <div class="ui-range-values">
                                                <span class="ui-price-title"> Price: </span>
                                                <div class="ui-range-value-min"><span class="min_price"></span>
                                                    <input type="hidden" value="100">
                                                </div> -
                                                <div class="ui-range-value-max"><span class="max_price"></span> VND
                                                    <input type="hidden" value="9950">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="single-shop-left bg-white radius-10 mt-4">
                            <div class="single-shop-left-title open">
                                <h5 class="title"> Categories </h5>
                                <div class="single-shop-left-inner margin-top-15">
                                    <ul class="single-shop-left-list active-list list-style-none">
                                        <li class="item {{ $cate_id == 0 ? 'active' : '' }}"> <a
                                                href="{{ route('room') }}">
                                                Tất cả</a> </li>
                                        @foreach ($categories as $category)
                                            <li class="item {{ $cate_id == $category->id ? 'active' : '' }}"> <a
                                                    href="{{ route('roomByCate', ['cate_id' => $category->id]) }}">
                                                    {{ $category->name }} </a> </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-grid-contents">
                    <div class="grid-list-contents">
                        <div class="grid-list-contents-flex">
                            <p class="grid-list-contents-para">
                                {{ 'Showing ' . $rooms->count() . ' of ' . $rooms->total() . ' results' }} </p>
                            <div class="grid-list-view">
                                <ul class="grid-list-view-flex d-flex tabs list-style-none">
                                    <li class="grid-list-view-icons active" data-tab="tab-grid">
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-border-all"></i>
                                        </a>
                                    </li>
                                    <li class="grid-list-view-icons" data-tab="tab-list">
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-bars"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            {{-- san pham --}}
                            @foreach ($rooms as $room)
                                <div class="col-md-6">
                                    <div class="hotel-view bg-white radius-20">
                                        <a href="{{ route('room-detail', ['id' => $room->id]) }}"
                                            class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                            style="background-image: url({{ Storage::url($room->image) }}); ">
                                        </a>
                                        <div class="hotel-view-contents">
                                            <div class="hotel-view-contents-header">
                                                {{-- <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5
                                            <span class="hotel-view-contents-review-count"> (380) </span> </span> --}}
                                                <h3 class="hotel-view-contents-title"> <a
                                                        href="{{ route('room-detail', ['id' => $room->id]) }}">
                                                        {{ $room->name }}</a> </h3>
                                                <div class="hotel-view-contents-location mt-2">
                                                    <span>{{ $room->category->name }}</span>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-middle">
                                                <div class="hotel-view-contents-flex">
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Car Parking">
                                                        <i class="las la-parking"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Free Wifi">
                                                        <i class="las la-wifi"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Free Breakfast">
                                                        <i class="las la-coffee"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Home Service">
                                                        <i class="las la-quidditch"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Swimming Pool">
                                                        <i class="las la-swimming-pool"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Reception">
                                                        <i class="las la-receipt"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon myTooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                                                        <i class="las la-dumbbell"></i>
                                                    </div>
                                                    <div class="hotel-view-contents-icon">
                                                        <a class="hotel-view-contents-icon-more"
                                                            href="javascript:void(0)"> +8
                                                            More </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-view-contents-bottom">
                                                <div class="hotel-view-contents-bottom-flex">
                                                    <div class="hotel-view-contents-bottom-contents">
                                                        <h4 class="hotel-view-contents-bottom-title">
                                                            {{ number_format($room->price, 0, '.', ',') }}VND
                                                            <sub>/day</sub>
                                                        </h4>
                                                    </div>
                                                    <div class="btn-wrapper">
                                                        <a href="{{ route('room-detail', ['id' => $room->id]) }}"
                                                            class="cmn-btn btn-bg-1 btn-small">
                                                            Book Now </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="pagination-wrapper">
                                    {{ $rooms->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-list" class="tab-content-item mt-4">
                        <div class="row gy-4">
                            {{-- san pham --}}
                            @foreach ($rooms as $room)
                                <div class="col-12">
                                    <div class="hotel-view bg-white radius-20">
                                        <div class="hotel-view-flex">
                                            <a href="{{ route('room-detail', ['id' => $room->id]) }}"
                                                class="hotel-view-thumb hotel-view-list-thumb bg-image"
                                                style="background-image: url({{ Storage::url($room->image) }});">
                                            </a>
                                            <div class="hotel-view-contents">
                                                <div class="hotel-view-contents-header">
                                                    <div
                                                        class="hotel-view-contents-header-flex d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                                        <h3 class="hotel-view-contents-title"> <a
                                                                href="{{ route('room-detail', ['id' => $room->id]) }}">
                                                                {{ $room->name }} </a> </h3>
                                                        <div class="btn-wrapper">
                                                            <a href="javascript:void(0)"
                                                                class="cmn-btn btn-bg-1 btn-small">
                                                                Book Now </a>
                                                        </div>
                                                    </div>
                                                    <div class="hotel-view-contents-location mt-2">
                                                        {{ $room->category->name }}
                                                    </div>
                                                </div>
                                                <div class="hotel-view-contents-middle">
                                                    <div class="hotel-view-contents-flex">
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-parking"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill">
                                                                Parking
                                                            </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-wifi"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill"> Wifi
                                                            </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-coffee"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill">
                                                                Breakfast
                                                            </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-quidditch"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill"> Room
                                                                Service </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-swimming-pool"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill"> Pool
                                                            </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-receipt"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill">
                                                                Reception
                                                            </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <span> <i class="las la-dumbbell"></i> </span>
                                                            <p class="hotel-view-contents-icon-title flex-fill"> Gym
                                                            </p>
                                                        </div>
                                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                                            <a class="hotel-view-contents-icon-more"
                                                                href="javascript:void(0)"> +8 More </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hotel-view-contents-bottom">
                                                    <div class="hotel-view-contents-bottom-flex">
                                                        <div
                                                            class="hotel-view-contents-bottom-contents d-flex flex-wrap gap-4 gap-sm-1">
                                                            <h4 class="hotel-view-contents-bottom-title">
                                                                {{ number_format($room->price, 0, '.', ',') }}VND
                                                                <sub>/day</sub>
                                                            </h4>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="pagination-wrapper">
                                    {{ $rooms->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
