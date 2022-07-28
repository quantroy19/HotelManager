@extends('admin.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.category.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status">
                                        @foreach ($status as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
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
