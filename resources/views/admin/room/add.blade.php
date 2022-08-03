@extends('admin.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/custom_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/summernote/dist/summernote-bs4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                    <br>
                </div>
                <form method="POST" action="{{ route('admin.room.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="name"
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger error">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Price <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="price" placeholder="price"
                            value="{{ old('price') }}">
                    </div>
                    @error('price')
                        <div class="alert alert-danger error">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="image">{{ __('Category') }}</label>
                        <select class="custom-select form-control" name="category_id">
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="summernote">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" id="summernote">{{ old('description') }}</textarea>
                    </div>
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
                                    <input class="form-check-input" type="checkbox" name="status" value="1" checked>
                                    <span class="form-check-sign "></span>
                                </span>
                                <span class="col-11">Active</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <script src="{{ asset('/bower_components/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('/js/summernote.js') }}"></script>
    <script src="{{ asset('js/uploadImage.js') }}"></script>
@endsection
