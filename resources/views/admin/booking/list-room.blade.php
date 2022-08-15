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
                <div class="card-body">
                    <div class="row">

                        @foreach ($rooms as $room)
                            <div class="col-3 col-lg-3 col-md-4">
                                <div class="card">
                                    <img width="100%" class="card-img-top" src="{{ Storage::url($room->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $room->name }}</h3>
                                        <a href="{{ route('admin.book.createBookingById', $room->id) }}"
                                            class="btn btn-primary">{{ __('Booking') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <script src="{{ asset('js/uploadImage.js') }}"></script>
@endsection
