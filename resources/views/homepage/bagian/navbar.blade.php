<style>
    /* Menambahkan warna biru muda saat link aktif */
.navbar-nav .nav-item .nav-link.active {
    color: #00bcd4;  /* Biru muda */
}
.navbar-nav .nav-item .nav-link:hover{
    color:#00bcd4;
}

</style>
<header class="header-area header-sticky wow slideInDown" id="header" data-wow-duration="0.75s" data-wow-delay="0s">
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
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item align-items-center">
                                <a class="nav-link {{ Request::routeIs('landing') ? 'active' : '' }}" href="{{ route('landing') }}"><i class="fas fa-home me-2 "></i>Home</a>
                            </li>
                            <li class="nav-item align-items-center">
                                <a class="nav-link {{ Request::routeIs('fulldata') ? 'active' : '' }}" href="{{ route('fulldata') }}"><i class="fas fa-stethoscope me-2"></i>Data</a>
                            </li>
                            <li class="nav-item align-items-center">
                                <a class="nav-link {{ Request::routeIs('fullrekammedis') ? 'active' : '' }}" href="{{ route('fullrekammedis') }}"><i class="fas fa-user-md me-2"></i>Data Rekam Medis</a>
                            </li>
                            <li class="nav-item align-items-center">
                                <a class="nav-link {{ Request::routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}"><i class="fas fa-question-circle me-2"></i>Tentang</a>
                            </li>
                            <li class="nav-item align-items-center">
                                <a class="nav-link btn text-white" href="{{ route('login2') }}">
                                    <i class="fa fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
