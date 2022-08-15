@extends('client.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('css/custom_client.css') }}">
@endsection
@section('content')
    <section class="hotel-details-area section-bg-2 pat-50 pab-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="details-left-wrapper">
                        <div class="details-contents bg-white radius-10">
                            <div class="details-contents-header">
                                <div class="details-contents-thumb details-contents-main-thumb bg-image"
                                    style="background-image: url({{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/details_main.jpg') }});">
                                </div>
                            </div>
                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                    <h3 class="hotel-view-contents-title"> {{ $room->name }}</h3>
                                    <span>{{ $room->category->name }}</span>
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
                                            <h4 class="hotel-view-contents-bottom-title">
                                                {{ number_format($room->price, 0, ',', '.') }} VND<sub>/day</sub> </h4>
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
                                </ul>
                                <div id="about" class="tab-content-item active">
                                    <div class="about-tab-contents">
                                        {!! $room->description !!}
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
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <strong>{{ Session::get('error') }}</strong>
                                        </div>
                                    @endif
                                    @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <strong>{{ Session::get('success') }}</strong>
                                        </div>
                                    @endif
                                    <form action="{{ route('bookingRoom', ['id' => $id]) }}" id='checkout-form'
                                        method="post">
                                        @csrf
                                        @error('booking')
                                            <div class="text-danger error">{{ $message }}</div>
                                        @enderror
                                        <input type="hidden" name="room_id" value="{{ $id }}">
                                        <div class="single-input">
                                            <label class="details-sidebar-dropdown-title"> Check In </label>
                                            <input class="form-control" name="departure_date" id="from-picker"
                                                type="text" autocomplete="off" placeholder="Check in"
                                                value="{{ old('departure_date') }}">
                                        </div>
                                        @error('departure_date')
                                            <div class="text-danger error">{{ $message }}</div>
                                        @enderror
                                        <div class="single-input mt-3">
                                            <label class="details-sidebar-dropdown-title"> Check Out </label>
                                            <input class="form-control" name="arrival_date" id="to-picker" type="text"
                                                autocomplete="off" placeholder="Check out"
                                                value="{{ old('arrival_date') }}">
                                        </div>
                                        @error('arrival_date')
                                            <div class="text-danger error">{{ $message }}</div>
                                        @enderror
                                        <div class="single-input mt-3">
                                            <label class="details-sidebar-dropdown-title"> Name </label>
                                            <input class="form-control" name="name" type="text"
                                                value="{{ old('name') }}">
                                        </div>
                                        @error('name')
                                            <div class="text-danger error">{{ $message }}</div>
                                        @enderror
                                        <div class="single-input mt-3">
                                            <label class="details-sidebar-dropdown-title"> Phone</label>
                                            <input class="form-control" name="phone" type="text"
                                                value="{{ old('phone') }}">
                                        </div>
                                        @error('phone')
                                            <div class="text-danger error">{{ $message }}</div>
                                        @enderror
                                        <div class="single-input mt-3">
                                            <label class="details-sidebar-dropdown-title"> Email</label>
                                            <input class="form-control" name="email" type="email"
                                                value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <div class="text-danger error">{{ $message }}</div>
                                        @enderror
                                    </form>
                                </div>
                                <div class="btn-wrapper mt-4">
                                    <input class="btn btn-info text-white" type="submit" value="Booking"
                                        form="checkout-form">
                                </div>
                            </div>
                        </div>
                        <div class="hotel-details-widget widget bg-white radius-10">
                            <div class="hotel-view">
                                <div class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                    style="background-image: url({{ asset('bower_components/template-hotel-booking/beyond_hotel/assets/img/single-page/hotel-grid1.jpg') }});">
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
@section('script')
    @parent
    <script>
        $(function() {
            var arrDate = @json($arrDate);

            function disableDates(date) {
                var string = $.datepicker.formatDate('dd-mm-yy', date);
                return [arrDate.indexOf(string) == -1];
            }
            var dateFormat = "mm/dd/yy",
                from = $("#from-picker")
                .datepicker({
                    minDate: 0,
                    beforeShowDay: disableDates,
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    beforeShow: function(input, inst) {
                        setTimeout(function() {
                            inst.dpDiv.css({
                                zIndex: 9999,
                            });
                        }, 0);
                    }
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#to-picker").datepicker({
                    minDate: 0,
                    beforeShowDay: disableDates,
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    beforeShow: function(input, inst) {
                        setTimeout(function() {
                            inst.dpDiv.css({
                                zIndex: 9999,
                            });
                        }, 0);
                    }
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
