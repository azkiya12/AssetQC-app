<!-- Sidebar -->
<div class="sidebar sidebar-style-2 d-print-none" data-background-color="dark">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">
                <li class="nav-item {{ (request()->is('dashboard*')) ? 'active' : '' }}">
                    <a href="/dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                </li>
                <li class="nav-item {{ (request()->is('asset*')) ? 'active' : '' }}">
                    <a href="{{route('asset.index')}}">
                        <i class="fas fa-desktop"></i>
                        <p>Assets</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('categories*')) ? 'active' : '' }}">
                    <a href="{{ route('categories.index')}}">
                        <i class="fas fa-layer-group"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('manufakturs*')) ? 'active' : '' }}">
                    <a href="{{ route('manufakturs.index') }}">
                        <i class="fas fa-industry"></i>
                        <p>Manufactur</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('status*')) ? 'active' : '' }}">
                    <a href="{{route('status.index')}}">
                        <i class="fas fa-circle-notch"></i>
                        <p>Status</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('location*')) ? 'active' : '' }}">
                    <a href="{{route('location.index')}}">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Location</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                </li>
                <li class="nav-item {{ (request()->is('suppliers*')) ? 'active' : '' }}">
                    <a href="{{route('suppliers.index')}}">
                        <i class="fas fa-handshake"></i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#users">
                        <i class="fas fa-address-book"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="/">
                        <i class="far fa-sun"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->