<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Kesehatan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('template-admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template-admin/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('template-admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" />
</head>

<body>



    <div class="container my-5">
        <div class="card border-bottom-0 rounded">
            <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
                <h2>Tambah Pasien</h2>
                <h3><a href="{{ route('ukssiswa')}}" class="btn btn-sm btn-danger rounded">Back</a></h3>
            </div>
            <div class="card-body">
                <p class="card-title">Tambahkan Data Pasien</p>
                {{-- @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif --}}
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap"
                            class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" id="kelas"
                            class="form-control @error('kelas') is-invalid @enderror" required>
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas"
                            class="form-control @error('wali_kelas') is-invalid @enderror" required>
                        @error('wali_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="keluhan" class="form-label">Keluhan</label>
                        <input type="text" name="keluhan" id="keluhan"
                            class="form-control @error('keluhan') is-invalid @enderror" required>
                        @error('keluhan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5 mt-5">
                        <label for="status_pengobatan" class="form-label">Status Pengobatan</label>
                        <input type="text" name="status_pengobatan" id="status_pengobatan"
                            class="form-control @error('status_pengobatan') is-invalid @enderror" required readonly
                            value="Belum Berobat">
                        @error('status_pengobatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <p class="text-warning">catatan : obat ringan dari UKS</p>

                    </div>

                    <div class="mb-5">
                        <label for="tanggal_sakit" class="form-label">Tanggal Sakit</label>
                        <input type="date" name="tanggal_sakit" id="tanggal_sakit"
                            class="form-control @error('tanggal_sakit') is-invalid @enderror" required>
                        @error('tanggal_sakit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary" style="color: white"><i
                            class="fa-solid fa-plus"></i>Tambah Data</button>
                </form>
            </div>
        </div>
    </div>

    </script>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('template-admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('template-admin/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('template-admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template-admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template-admin/js/template.js') }}"></script>
    <script src="{{ asset('template-admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('template-admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('bootstrap.min.js') }}"></script>
    <script src="{{ asset('jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('popper.min.js') }}"></script>

    <!-- End custom js for this page-->
    <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>


</body>

</html>
