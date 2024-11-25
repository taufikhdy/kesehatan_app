<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <title>Klinik Pratama | AL-ITTIHAD</title>

    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css?v2+') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.css') }}">
    <style>
        .header-area .img-logo {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Ini akan memastikan logo berada di kiri */
        }

        .header-area nav.main-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Ini untuk menjaga logo di kiri dan menu di kanan */
        }

        .lah {
            color: gray;
            transition: all .2s
        }

        .lah:hover {
            color: #00bcd4;
            letter-spacing: 5px;
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
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row service">
                                    <div class="faris col-lg-12">
                                        <h4>"TEACHING FACTORY SMKS AL-ITTIHAD"</h4>
                                        <a class="fariss">SMKS Al-Ittihad terus berupaya menghadirkan dunia industri ke dalam
                                            lingkungan pendidikan, salah satunya dengan menjalin kerja sama strategis bersama
                                            PT Asqi Digital Inovation. Melalui program Teaching Factory, kedua belah pihak kini
                                            mengembangkan berbagai aplikasi yang bertujuan untuk memudahkan kebutuhan masyarakat
                                            luas.
                                        </a>
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

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>SMKS AL-ITIHAD <em>TEACHING FACTORY</em> Team</h4>
                        <img src="{{ asset('landing/assets/images/heading-line-dec.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="container mb-5 wow fadeInDown text-center" data-wow-duration="3s" data-wow-delay="0.5s">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item first-service">
                        <h4>Michail Ibnu Qalbi</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item second-service">
                        <h4>Abdul Muhith Faris Musyaffa</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item third-service">
                        <h4>Taufik Hidayat</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Footer -->
    <div class="border-top container-fluid bg-white text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="border-top: 2px solid #00bcd4;
           box-shadow: 0 10px 30px rgba(0, 188, 212, 0.6);">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4" style="color: #00bcd4">Alamat</h5>
                    <p class="mb-2  text-muted"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Bandung No.03, Bojong,
                        Kec.
                        Karangtengah, Kabupaten Cianjur, Jawa Barat 43281, Indonesia</p>
                    <p class="mb-2  text-muted"><i class="fa fa-phone-alt me-3"></i>+62263280051</p>
                    <p class="mb-2  text-muted"><i class="fa fa-envelope me-3"></i>smkaltie@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="mb-4" style="color: #00bcd4">Tautan Cepat</h5>
                    <div class="">
                        <a class="lah" href="{{ route('landing') }}">Home</a><br>
                        <a class="lah" href="{{ route('fulldata') }}">Data</a><br>
                        <a class="lah" href="{{ route('fullrekammedis') }}">Data Rekam Medis</a><br>
                        <a class="lah" href="{{ route('tentang') }}">Tentang</a><br>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4" style="color: #00bcd4">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="" alt="">
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-5 col-md-6">
                    <h5 class="mb-4" style="color: #00bcd4">Peta Ponpes Al-Ittihad</h5>
                    <!-- map -->
                    <div class="row g-0 mx-lg-0">
                        <div class="" style="min-height: 200px;">
                            <div class="position-relative h-100">
                                <iframe class="position-absolute rounded w-100 h-100" style="object-fit: cover;"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.945161979667!2d107.1726618!3d-6.8019021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68536ad0d9d7a3%3A0xbd528f81cf2abe7b!2sPondok%20Pesantren%20Al%20Ittihad%20Cianjur!5e0!3m2!1sid!2suk!4v1681350968382!5m2!1sid!2suk"
                                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                {{-- container-fluid bg-light overflow-hidden px-lg-0 --}}
                                {{-- container contact px-lg-0 --}}
                                {{-- col-lg- pe-lg-0 --}}
                            </div>


                        </div>
                    </div>
                    <!-- map -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-muted">
                        Copyright &copy; 2024, <a href="https://smk-alittihad.sch.id/">SMKS AL-ITTIHAD</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-muted">
                        Developed By: <a href="#">Three Persons</a>
                        <br>
                        Distributed By: <a href="#" target="">Pondok Pesantren Al-Ittihad</a>
                        <br>
                        Created By: <a href="">Tefatie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->


    <script src="{{ asset('landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('landing/assets/js/animation.js') }}"></script>
    <script src="{{ asset('landing/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('landing/assets/js/popup.js') }}"></script>
    <script src="{{ asset('landing/assets/js/custom.js') }}"></script>

</body>

</html>
