@extends('admin.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/custom_admin.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="card-body col-6">
                    <form method="POST" action="{{ route('admin.booking.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Room</label>
                            <select class="custom-select form-control" name="room_id" id="room_id1">
                                <option value="121" selected>Select Room</option>
                                @foreach ($rooms as $room)
                                    <option room_id="{{ $room->id }}" value="{{ $room->id }}">{{ $room->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('room_id')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Arrival date</label>
                            <input class="form-control" name="arrival_date" id="from-picker" type="text"
                                autocomplete="off" placeholder="Arrival date " value="{{ old('arrival_date') }}">
                        </div>
                        @error('arrival_date ')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Departure date</label>
                            <input class="form-control" name="departure_date" id="to-picker"type="text"
                                autocomplete="off" placeholder="departure_date" value="{{ old('departure_date') }}">
                        </div>
                        @error('departure_date')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="phone"
                                value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Infomation</label>
                            <textarea style="height: 100px" class="form-control" name="infomation" id="" cols="50" rows="30">{{ old('infomation') }}</textarea>
                        </div>
                        @error('infomation')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-info btn-fill">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @parent
    <script src="{{ asset('js/uploadImage.js') }}"></script>
    <script>
        $(function() {
            var dateFormat = "mm/dd/yy",
                from = $("#from-picker")
                .datepicker({
                    minDate: 0,
                    // beforeShowDay: disableDates,
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
                    // beforeShowDay: disableDates,
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
