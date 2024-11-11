<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <div class="img-logo">
                        <a href="{{ route('landing') }}" class="custom-logo-link" rel="home">
                            <img width="280" height="49" src="{{ asset('image/logopanjang.png') }}" class="custom-logo" alt="SMK Al-Ittihad" decoding="async" sizes="(max-width: 280px) 100vw, 280px">
                        </a>
                    </div>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="{{ route('landing') }}" class="{{ Request::routeIs('landing') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="{{ route('fulldata') }}" class="{{ Request::routeIs('fulldata') ? 'active' : '' }}">Data</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#" class="{{ Request::routeIs('') ? 'active' : '' }}">Data Rekam Medis</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#" class="{{ Request::routeIs('') ? 'active' : '' }}">Tentang</a>
                        </li>
                        <li>
                            <a href="{{ route('login2') }}" class="btn btn-primary text-white">
                                <i class="fa fa-sign-in-alt"></i> Sign In Now
                            </a>
                        </li>
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
