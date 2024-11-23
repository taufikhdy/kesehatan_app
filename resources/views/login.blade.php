<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <title>LOGIN</title>
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">


    <link href="{{ asset('poskess/lib/animate/animate.min.css') }}" rel="stylesheet">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }

            @media (max-width: 768px) {
                img {
                    background-size: cover;
                    /* Mengatur gambar agar menutupi area */
                    position: absolute;
                    /* Memastikan gambar berada di tengah */
                    top: 45%;
                    /* Mengatur posisi dari atas */
                    left: 50%;
                    /* Mengatur posisi dari kiri */
                    transform: translate(-50%, -50%);
                    /* Menggeser gambar ke tengah */
                    /* top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0; */
                    z-index: -1;
                    /* Memastikan gambar berada di belakang elemen lain */
                }
            }

            img {
                background-size: cover;
                /* Mengatur gambar agar menutupi area */
                position: absolute;
                /* Memastikan gambar berada di tengah */
                top: 45%;
                /* Mengatur posisi dari atas */
                left: 50%;
                /* Mengatur posisi dari kiri */
                transform: translate(-50%, -50%);
                /* Menggeser gambar ke tengah */
                /* top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0; */
                z-index: -1;
                /* Memastikan gambar berada di belakang elemen lain */
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="">
            <a href="{{ route('landing') }}" class="btn btn-danger btn-sm">Back To Landing Page</a>
        </div>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('image/logo.png') }}" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 wow fadeInDown" data-wow-delay="0.3s">
                    <form action="" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <p class="lead fw-normal mb-0 me-3" style="text-align:center; font-size:40px;">Login</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            {{-- <p class="text-center fw-bold mx-3 mb-0">Or</p> --}}
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Email" name="email" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                <div class="d-grid gap-2">
                    <a href=""></a>
                    <button name="submit" type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </button>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center py-4 px-4 px-xl-5 bg-primary"
            style="margin-top: 200px">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2024. AL-ITTIHAD.
            </div>
        </div>
        <!-- Copyright -->

        <!-- Right -->

    </section>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('poskess/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('poskess/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('poskess/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('poskess/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('poskess/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('poskess/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('poskess/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('poskess/js/main.js') }}"></script>


</html>
