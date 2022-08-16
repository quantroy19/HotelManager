@extends('admin.layout.app')

@section('css')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card bg-warning text-white">
                <div class="card-body p-4">
                    <h2 class="card-title text-white">Total user</h2>
                    <h4 class="card-title p-4 text-white">{{ $countUser }}</h4>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-danger">Show</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card  bg-info">
                <div class="card-body p-4">
                    <h2 class="card-title text-white">Total Room</h2>
                    <h4 class="card-title p-4 text-white">{{ $countRoom }}</h4>
                    <a href="{{ route('admin.room.index') }}" class="btn btn-danger">Show</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-secondary">
                <div class="card-body p-4">
                    <h2 class="card-title">Total Booking</h2>
                    <h4 class="card-title p-4">{{ $countRoom }}</h4>
                    <a href="{{ route('admin.booking.index') }}" class="btn btn-danger">Show</a>
                </div>
            </div>
        </div>
    </div>
@endsection
