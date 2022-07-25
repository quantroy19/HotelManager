<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png"
        href="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title', 'Register')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    @include('admin.layout.style')
    <style>
        .note {
            text-align: center;
            height: 80px;
            background: -webkit-linear-gradient(left, #4681ff, #005881);
            color: #fff;
            font-weight: bold;
            line-height: 80px;
            font-size: 30px;
            padding-top: 2px;
            padding-bottom: 10px;
        }

        .form-content {
            padding: 7%;
            border: 1px solid #ced4da;
            border-radius: 0px 0px 10px 10px;
            margin-bottom: 2%;
        }

        .form-control {
            border-radius: 1.5rem;
            padding-left: 30px;
        }

        .btnSubmit {
            border: none;
            border-radius: 1.5rem;
            padding: 1%;
            width: 20%;
            cursor: pointer;
            background: #0062cc;
            color: #fff;
        }

        .register-form {
            margin-top: 5%;
        }

        .error {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container register-form col-5">
        <div class="form">
            <div class="note">
                Register
            </div>
            <form class="form-content" method="POST" action="{{ url('/register') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name *"
                                value="{{ old('name') }}" />
                        </div>
                        @error('name')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email *"
                                value="{{ old('email') }}" />
                        </div>
                        @error('email')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" placeholder="Phone Number *"
                                value="{{ old('phone') }}" />
                        </div>
                        @error('phone')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address"
                                value="{{ old('address') }}" />
                        </div>
                        @error('address')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password *"
                                value="{{ old('password') }}" />
                        </div>
                        @error('password')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" name="re-password"
                                placeholder="Confirm Password *" value="{{ old('re-password') }}" />
                        </div>
                        @error('re-password')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btnSubmit">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
@include('admin.layout.script')

</html>
