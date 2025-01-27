<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                @include('layouts.includes.logo')
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="sidebar-item {{ request()->routeIs('admin.term-and-condition.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.term-and-condition.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Syarat ketentuan Pembayaran</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>