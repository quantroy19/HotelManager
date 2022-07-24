<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png"
          href="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    @section('css')
    <link href="{{asset('bower_components/light-bootstrap-dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link
        href="{{asset('bower_components/light-bootstrap-dashboard/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}"
        rel="stylesheet"/>
        @yield('css')
    @show
</head>

<body>
<div class="wrapper">
    {{--   include sidebar --}}
    @include('.admin.layout.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
        @include('.admin.layout.navigation')
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
@include('.admin.layout.script')
@yield('script')
</html>