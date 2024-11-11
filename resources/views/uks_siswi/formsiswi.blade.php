<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Kesehatan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('poskestren/assets/vendor/css/core.css')}}" />
    <link rel="stylesheet" href="{{ asset('poskestren/assets/vendor/css/theme-default.css')}}" />
    <link rel="stylesheet" href="{{ asset('poskestren/assets/css/demo.css')}}" />

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- link jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>



    <div class="container my-5">
        <div class="card border-bottom-0 rounded">
            <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
                <h2>Tambah Pasien</h2>
                <h3><a href="{{ route('ukssiswi')}}" class="btn btn-sm btn-danger rounded">Back</a></h3>
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
                <form action="{{ route('kirimsiswi')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" id="kelas"
                            class="form-control @error('kelas') is-invalid @enderror" required>

                            <option value="">Pilih Kelas</option>

                        @foreach ($data as $no=>$kelas)

                        <option value="{{$kelas->kelas}}">{{$kelas->kelas}}</option>

                        @endforeach

                        </select>

                        @error('kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas" class="form-control @error('wali_kelas') is-invalid @enderror" required value="" placeholder="Wali Kelas" readonly>
                        @error('wali_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" required>
                        @error('nama')
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
                        <label for="status" class="form-label">Status Pengobatan</label>
                        <input type="text" name="status" id="status"
                            class="form-control @error('status') is-invalid @enderror" required readonly
                            value="Belum Berobat">
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <p class="text-warning">catatan : obat ringan dari UKS</p>

                    </div>

                    <div class="mb-5">
                        <label for="tanggal" class="form-label">Tanggal Sakit</label>
                        <input type="date" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is-invalid @enderror" required>
                        @error('tanggal')
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




    <script>
        // Menggunakan jQuery untuk menangani perubahan pada select kelas
        $('#kelas').change(function() {
            var kelas = $(this).val();  // Mendapatkan ID kelas yang dipilih

            if (kelas) {
                // Jika ada kelas yang dipilih, lakukan request ke server
                $.ajax({
                    url: '/get-teacher/' + kelas,  // URL untuk mengambil wali kelas
                    method: 'GET',
                    success: function(response) {
                        // Jika ada wali kelas, tampilkan di input text
                        if (response.wali_kelas) {
                            $('#wali_kelas').val(response.wali_kelas);  // Menampilkan nama wali kelas di input text
                        } else {
                            $('#wali_kelas').val('');  // Kosongkan jika tidak ada wali kelas
                        }
                    }
                });
            } else {
                // Jika tidak ada kelas yang dipilih, kosongkan input wali kelas
                $('#wali_kelas').val('');
            }
        });
    </script>


</body>

</html>
