<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="{{ route('landing') }}" class="logo">
                  <img src="{{ asset('image/logo.png') }}" alt="Chain App Dev" width="70px" height="70px">
                </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ route('landing') }}" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="">Services</a></li>
              <li class="scroll-to-section"><a href="">About</a></li>
              <li class="scroll-to-section"><a href="">Pricing</a></li>
              <li class="scroll-to-section"><a href="">Newsletter</a></li>
              <li><a href="{{ route('login2') }}" class="btn btn-outline-primary text-white"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></li>
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
