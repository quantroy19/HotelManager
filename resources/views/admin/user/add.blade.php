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
                    <form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-5 ">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-7 ">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="text" class="form-control" name="email" placeholder="email"
                                        value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="text" class="form-control" name="phone" placeholder="phone"
                                value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" placeholder="address"
                                value="{{ old('address') }}">
                        </div>
                        @error('address')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                value="{{ old('password') }}" />
                        </div>
                        @error('password')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="re-password" placeholder="Confirm Password"
                                value="{{ old('re-password') }}" />
                        </div>
                        @error('re-password')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Avatar</label>
                            <div class="form-group">
                                <label class="custom-file">
                                    <input type="file" name="image" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                        @error('image')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <div class="form-group pt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input ml-2" type="radio" name="role_id"
                                                id="inlineRadio1" value="{{ config('custom.user_roles.user') }}" checked>
                                            <label class="form-check-label" for="inlineRadio1">User
                                                {{ config('custom.user_roles.user') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input ml-2" type="radio" name="role_id"
                                                id="inlineRadio2" value="{{ config('custom.user_roles.admin') }}">
                                            <label class="form-check-label" for="inlineRadio2">Admin
                                                {{ config('custom.user_roles.admin') }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div class="form-check">
                                        <label class="form-check-label pt-3 row">
                                            <span class="col-1 ">
                                                <input class="form-check-input" type="checkbox" name="status"
                                                    value="1" checked>
                                                <span class="form-check-sign "></span>
                                            </span>
                                            <span class="col-11 pb-5">Active</span>
                                        </label>
                                    </div>
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
