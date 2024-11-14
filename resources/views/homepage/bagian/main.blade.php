
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <title>Klinik Pratama | AL-ITTIHAD</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css?v2+') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}" >
    <link rel="stylesheet" href="{{ asset('landing/assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.css') }}">
    <style>
        .header-area .img-logo {
                display: flex;
                align-items: center;
                justify-content: flex-start; /* Ini akan memastikan logo berada di kiri */
                }

                .header-area nav.main-nav {
                display: flex;
                align-items: center;
                justify-content: space-between; /* Ini untuk menjaga logo di kiri dan menu di kanan */
                }

                .faris {
            color: white;
        }

        .fariss {
            color: white;
        }

        .fariss:hover {
            color: white;
        }
        @media (max-width: 992px) {
            .faris {
                color: black;
            }

            .fariss {
                color: black;
            }

            .fariss:hover {
                color: white;
            }
        }
    </style>

  </head>

<body>

@include('homepage.bagian.navbar')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row service">
                  <div class="faris col-lg-12">
                    <h3>"Kesehatan Adalah Mahkota, yang
                        Tidak diketahui kecuali oleh Orang yang Sakit"</h3>
                    <a class="fariss">kesehatan adalah hal yang sangat berharga, namun sering kali tidak disadari nilainya hingga seseorang jatuh sakit. Ini mengingatkan kita untuk menghargai dan menjaga kesehatan selagi masih memilikinya.</a>
                  </div>
                  {{-- <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.5s">
                <img src="{{ asset('image/logo.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@yield('content')
@include('homepage.bagian.footer')

  <!-- Scripts -->
  <script src="{{ asset('landing/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('landing/assets/js/animation.js') }}"></script>
  <script src="{{ asset('landing/assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('landing/assets/js/popup.js') }}"></script>
  <script src="{{ asset('landing/assets/js/custom.js') }}"></script>

</body>
</html>
