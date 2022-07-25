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
    <title>@yield('title', 'Dashboach')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    @section('css')
        @include('admin.layout.style')
    @show
</head>

<body>
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>This is a simpleRegister Form made using Boostrap.</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Confirm Password *"
                                value="" />
                        </div>
                    </div>
                </div>
                <button type="button" class="btnSubmit">Submit</button>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
@section('script')
    @include('admin.layout.script')
@show


</html>
