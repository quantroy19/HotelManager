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
                </div>
                <div class="card-body col-6">
                    <form method="POST" action="{{ route('admin.booking.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Room</label>
                            <select class="custom-select form-control" name="room_id">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('room_id')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Departure date</label>
                            <input type="date" class="form-control" name="dparture_date" placeholder="Departure date "
                                value="{{ old('departure_date') }}">
                        </div>
                        @error('departure_date ')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Arrival date</label>
                            <input type="date" class="form-control" name="arrival_date" placeholder="arrival_date"
                                value="{{ old('arrival_date') }}">
                        </div>
                        @error('arrival_date')
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
@endsection
