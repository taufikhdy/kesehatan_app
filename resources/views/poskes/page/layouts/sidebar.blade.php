<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="bi bi-hospital me-2"></i>Poskestren</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard')}}" class="nav-item nav-link" class="{{ Request::is('') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('data_sakit')}}" class="nav-item nav-link" class="{{ Request::is('data_sakit') ? 'active' : '' }}"><i class="bi bi-clipboard2-data me-2"></i>Data Sakit</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>More</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item py-1">Sign In</a>
                    <a href="signup.html" class="dropdown-item py-1">Sign Up</a>
                    <a href="404.html" class="dropdown-item py-1">404 Error</a>
                    <a href="blank.html" class="dropdown-item py-1">Blank Page</a>
                    <a href="/logout" class="dropdown-item text-white bg-danger py-1"><i class="bi bi-x-square"></i>
                        Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
