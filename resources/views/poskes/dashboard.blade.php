<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pos Kesehatan Pesantren Al-Ittihad</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('image/logo.png') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('dashmin/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('dashmin/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>
        #badge {
            animation: badge .8s infinite;
        }

        @keyframes badge {

            0% {
                transform: scale(1);
            }

            50% {
                background-color: orange;
                color: white
            }

            100% {
                transform: scale(1.1)
            }
        }

        #badge:hover {
            animation: none;
        }

        #logout{
            color: red;
        }

        #logout .bi.bi-x-circle{
            color: white;
            background-color: red;
        }

        #logout:hover{
            background: red;
            color: white;
        }

        #logout:hover .bi.bi-x-circle{
            color: red;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="loader"></div>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>



        <!-- sidebar -->
        @include('poskes.page.layouts.sidebar')


        <!-- kontent -->
        <div class="content">

            @yield('content')


            <!-- footer -->
            @include('poskes.page.layouts.footer')
        </div>
        <!-- konten -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashmin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('dashmin/js/main.js') }}"></script>
</body>

</html>
