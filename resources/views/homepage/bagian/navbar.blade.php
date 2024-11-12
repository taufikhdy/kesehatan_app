<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Navbar menggunakan Bootstrap -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('landing') }}">
                        <img height="50" src="{{ asset('image/logopanjang.png') }}" alt="SMK Al-Ittihad" class="d-inline-block align-top">
                    </a>

                    <!-- Toggle Button untuk Mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu -->
                    <div class="collapse navbar-collapse bg-white" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('landing') ? 'active' : '' }}" href="{{ route('landing') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('fulldata') ? 'active' : '' }}" href="{{ route('fulldata') }}">Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('fullrekammedis') ? 'active' : '' }}" href="{{ route('fullrekammedis') }}">Data Rekam Medis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white" href="{{ route('login2') }}">
                                    <i class="fa fa-sign-in-alt"></i> Sign In Now
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
