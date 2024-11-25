<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Kesehatan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />


    <link href="{{ asset('dashmin/css/bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{ asset('dashmin/css/style.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>



    <div class="container my-5">
        <div class="card border-bottom-0 rounded">
            <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
                <h2 class="text-white">Tambah Pasien</h2>
                <h3><a href="{{ route('ukssiswi') }}" class="btn btn-danger rounded"><i class="bi bi-x-square"></i>
                        Back</a></h3>
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
                <form action="{{ route('kirimsiswi') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" id="kelas" class="form-select @error('kelas') is-invalid @enderror"
                            required>

                            <option value="">Pilih Kelas</option>

                            @foreach ($data as $no => $kelas)
                                <option value="{{ $kelas->kelas }}">{{ $kelas->kelas }}</option>
                            @endforeach

                        </select>

                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wali_kelas" class="form-label">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas"
                            class="form-control @error('wali_kelas') is-invalid @enderror" required value=""
                            placeholder="Wali Kelas" readonly>
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
                            value="Berobat Ringan dari UKS (belum berobat)">
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
                            class="bi bi-plus-square"></i>
                            Tambah Data</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#kelas').change(function() {
            var kelas = $(this).val();

            if (kelas) {
                $.ajax({
                    url: '/get-teacher/' + kelas,
                    method: 'GET',
                    success: function(response) {
                        if (response.wali_kelas) {
                            $('#wali_kelas').val(response
                                .wali_kelas);
                        } else {
                            $('#wali_kelas').val('');
                        }
                    }
                });
            } else {
                $('#wali_kelas').val('');
            }
        });
    </script>


</body>

</html>
