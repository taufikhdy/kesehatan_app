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

    <!-- Additional CSS Files -->
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

        @media (min-width: 320px) and (max-width: 420px) {
            #top {
                display: none;
            }

            .top {
                position: relative;
                top: 100px;
            }

            .top #banners {
                text-align: center;
                padding: 100px 0;
            }
        }

        @media (min-width: 425px) {
            #top {
                display: block;
            }

            .top {
                position: relative;
                top: 0;
            }

            .top #banners {
                display: none;
            }
        }

        p {
            color: black;
        }



        @media print {

            /* Sembunyikan kolom Option */
            .table th:last-child,
            /* Header kolom terakhir (Option) */
            .table td:last-child {
                /* Sel kolom terakhir (Option) */
                display: none !important;
            }

            /* Kurangi jarak di atas tabel */
            #printArea {
                margin-top: 0 !important;
                /* padding-top: 0 !important; */

                padding: 5% 5% !important;
            }

            /* Tampilkan warna background */
            body {
                -webkit-print-color-adjust: exact;
                /* Untuk browser berbasis Webkit (Chrome, Edge, dll.) */
                print-color-adjust: exact;
                /* Standar */
            }

            /* Styling tabel */
            .table thead {
                background-color: #007bff !important;
                /* Warna biru */
                color: white !important;
                /* Teks putih */
            }

            .table tbody tr:nth-child(even) {
                background-color: #f2f2f2 !important;
                /* Warna abu-abu muda untuk baris genap */
            }

            .table tbody tr:nth-child(odd) {
                background-color: #ffffff !important;
                /* Warna putih untuk baris ganjil */
            }

            td{
                text-align: center;
            }

            /* Atur margin halaman cetak */
            @page {
                size: landscape;
                margin: 10mm;
                /* Atur sesuai kebutuhan */
            }

            /* Sembunyikan elemen di luar area cetak */
            body * {
                visibility: hidden;
            }

            /* Tampilkan hanya area cetak */
            #printArea,
            #printArea * {
                visibility: visible;
            }

            #printArea {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }

            .print {
                display: none;
            }

            #klinik{
                display: block !important;
            }
        }
    </style>

</head>

<body>

    <div class="print">
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
                                            <h3>"Kesehatan Adalah Mahkota, yang
                                                Tidak diketahui kecuali oleh Orang yang Sakit"</h3>
                                            <a class="fariss">kesehatan adalah hal yang sangat berharga, namun sering
                                                kali
                                                tidak disadari nilainya hingga seseorang jatuh sakit. Ini mengingatkan
                                                kita
                                                untuk menghargai dan menjaga kesehatan selagi masih memilikinya.</a>
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
        <div class="top">
            <div class="wow fadeIn" id="banners" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                        data-wow-delay="1s">
                                        <div class="row service">
                                            <div class="faris col-lg-12">
                                                <h3>"Kesehatan Adalah Mahkota, yang
                                                    Tidak diketahui kecuali oleh Orang yang Sakit"</h3>
                                                <a class="fariss">kesehatan adalah hal yang sangat berharga, namun
                                                    sering
                                                    kali
                                                    tidak disadari nilainya hingga seseorang jatuh sakit. Ini
                                                    mengingatkan
                                                    kita
                                                    untuk menghargai dan menjaga kesehatan selagi masih memilikinya.</a>
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
                                    <div class="right-image wow fadeInRight" data-wow-duration="3s"
                                        data-wow-delay="0.5s">
                                        <img src="{{ asset('image/logo.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        @yield('content')
    </div>

    <div class="print">
        @include('homepage.bagian.footer')
    </div>



    <script src="{{ asset('landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('landing/assets/js/animation.js') }}"></script>
    <script src="{{ asset('landing/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('landing/assets/js/popup.js') }}"></script>
    <script src="{{ asset('landing/assets/js/custom.js') }}"></script>

</body>

</html>
