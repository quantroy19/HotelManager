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
                    <form method="POST" action="{{ route('admin.banner.store') }}" class="col-5"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" placeholder="http://hotel.com"
                                value="{{ old('link') }}">
                        </div>
                        @error('link')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Image</label>
                            <div class="form-group">
                                <div>
                                    <img id="image_preview" src="" alt="your image"
                                        style="width: 350px; height:150px; margin-bottom: 10px; display: none" />
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
                                            checked>
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
    <script>
        $(function() {
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image").change(function() {
                $('#image_preview').css('display', 'block');
                readURL(this, '#image_preview');
            });

        });
    </script>
@endsection
