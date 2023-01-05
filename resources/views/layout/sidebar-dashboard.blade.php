<aside class="bg-green-anv main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="d-flex justify-content-center my-3">
        <a href="#" class="brand-link">
            <h3 class="brand-text text-center font-weight-bold">Admin AnV 2023</h3>
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Document
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.abstrak') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Abstrak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.paper') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paper</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.ppt') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PPT</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.author-data') }}" class="nav-link">
                        <i class="nav-icon fas fa-pen-alt"></i>
                        <p>
                            Authors Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.payment') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-alt"></i>
                        <p>
                            Payment
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.sponsorship') }}" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Sponsorship
                        </p>
                    </a>
                </li>
                <li class="nav-header">PROFILE SETTINGS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-door-open nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
