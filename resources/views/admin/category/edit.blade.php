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
                    <form method="POST" action="{{ route('admin.category.update', ['id' => $item->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="{{ $item->name }}">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 ">
                                <label for="">Status</label>
                                <div class="form-check">
                                    <label class="form-check-label pt-3 row">
                                        <span class="col-1 ">
                                            <input class="form-check-input" type="checkbox" name="status" value="1"
                                                {{ $item->status == config('custom.category_status_text.active') ? 'checked' : '' }}>
                                            <span class="form-check-sign "></span>
                                        </span>
                                        <span class="col-11 pb-5">Active</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
