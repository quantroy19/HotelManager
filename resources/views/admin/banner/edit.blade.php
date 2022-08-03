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
                    <form method="POST" action="{{ route('admin.banner.update', ['id' => $item->id]) }}" class="col-5"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"
                                value="{{ $item->name }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" placeholder="http://hotel.com"
                                value="{{ $item->link }}">
                        </div>
                        @error('link')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Image</label>
                            <div class="form-group">
                                <div>
                                    <img id="image_preview" src="{{ Storage::url($item->image) }}" alt="your image"
                                        style="width: 350px; height:150px; margin-bottom: 10px;" />
                                </div>
                                <label class="custom-file">
                                    <input type="file" name="image" id="image" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                        @error('image')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="">Status</label>
                            <div class="form-check">
                                <label class="form-check-label pt-3 row">
                                    <span class="col-1 ">
                                        <input class="form-check-input" type="checkbox" name="status" value="1"
                                            {{ $item->status == config('custom.banner_status_text.active') ? 'checked' : '' }}>
                                        <span class="form-check-sign "></span>
                                    </span>
                                    <span class="col-11 ">Active</span>
                                </label>
                            </div>
                        </div>
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
