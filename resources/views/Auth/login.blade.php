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
    <title>@yield('title', 'Login')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    @include('admin.layout.style')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="container register-form col-5">
        <div class="form">
            <div class="note">
                Login
            </div>
            <form class="form-content" method="POST" action="{{ Route('postLogin') }}">
                @csrf
                <div class="row">
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
                            <input type="password" class="form-control" name="password" placeholder="Your Password *"
                                value="{{ old('password') }}" />
                        </div>
                        @error('password')
                            <div class="alert alert-danger error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <?php //Hiển thị thông báo thành công
                    ?>
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif
                    <?php //Hiển thị thông báo lỗi
                    ?>
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif
                </div>
                <button type="submit" class="btnSubmit">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
@include('admin.layout.script')

</html>
