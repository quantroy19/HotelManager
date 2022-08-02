<div class="sidebar" data-image="{{ asset('bower_components/light-bootstrap-dashboard/assets/img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Hotel Manager
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.category.index') }}">
                    <i class="nc-icon nc-layers-3"></i>
                    <p>{{ __('Category') }}</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.room.index') }}">
                    <i class="nc-icon nc-backpack"></i>
                    <p>{{ __('Room') }}</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>{{ __('User') }}</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.banner.index') }}">
                    <i class="nc-icon nc-album-2"></i>
                    <p>{{ __('Banner') }}</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.coupon.index') }}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>{{ __('Coupon') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
