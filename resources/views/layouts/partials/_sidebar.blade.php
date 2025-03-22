<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user() ? Auth::user()->name : '' }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-user-secret'></i>
                        <p>Product</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-user-alt-slash'></i>
                        <p>Invoice</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class='fas fa-id-card'></i>
                        <p>Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                        <i class='fas fa-user-lock'></i>
                        <p>Role</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
