{{-- @extends('homepage.bagian.main')
@section('content')
@endsection --}}
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


</head>

<body>
    <div class="top">
        <div class="col-md-11 grid-margin stretch-card mt-4 ms-4">
            <div class="card border-bottom-0" id="printArea">
                <div class="card-body pb-0">
                    <h3 class="text-center text-primary mb-4">Detail Rekam Medis Pasien {{ $siswiberobat->nama }}</h3>
                    <div class="row">
                        <!-- Card Body Pertama -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswiberobat->nama }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Kelas</label>
                                <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswiberobat->kelas }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Wali Kelas</label>
                                <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswiberobat->wali_kelas }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Keluhan</label>
                                <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswiberobat->keluhan }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Status Pengobatan</label>
                                <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswiberobat->status }}" readonly>
                            </div>
                        </div>

                        <!-- Card Body Kedua -->
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Sakit</label>
                                <input type="text" class="form-control text-dark" id="" value="{{ $siswiberobat->tgl_sakit }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Berobat</label>
                                <input type="text" class="form-control text-dark" id="" value="{{ $siswiberobat->tgl_berobat }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control text-dark" id="" value="{{ $siswiberobat->obat }}" readonly>
                            </div>
                        </div>
                        <!-- Card Body Ketiga -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Catatan Dokter</label>
                                <textarea class="form-control text-dark" cols="30" rows="5" readonly>{{ $siswiberobat->catatan }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tombol Cetak --}}
            <div class="d-flex mt-3">
                <button class="btn btn-primary me-2" onclick="printTable()"><i class="fas fa-print"></i> Cetak</button>
                <a href="{{ route('fullrekammedis') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        {{-- End main --}}

        <!-- JavaScript untuk mencetak -->
        <script>
            function printTable() {
                window.print();
            }
        </script>

        <!-- Styling khusus untuk cetak -->
        <style>
            @media print {
                /* Atur margin halaman cetak */
                @page {
                    size: ; /* Ubah ke 'landscape' jika perlu */
                    margin: 10mm; /* Margin kertas */
                }

                /* Sembunyikan tombol dan elemen di luar area cetak */
                body * {
                    visibility: hidden;
                }

                /* Tampilkan hanya area cetak */
                #printArea, #printArea * {
                    visibility: visible;
                }

                /* Atur posisi area cetak */
                /* #printArea {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                } */

                /* Styling elemen cetak */
                .form-label {
                    font-weight: bold;
                }

                input, textarea {
                    border: none;
                    background-color: transparent !important;
                    box-shadow: none !important;
                }

                .foot{
                    display: none;
                }
            }
        </style>
    <div class="foot">
        @include('homepage.bagian.footer')
    </div>
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
