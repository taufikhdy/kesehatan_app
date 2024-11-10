<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <link rel="stylesheet" href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" />

</head>

<body>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <div class="container card card-rounded p-3 mt-5 mb-5" style="overflow: auto">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
                <h2>Data siswa</h2>
                <div class="d-flex justify-center align-items-center">
                    <h3 class="p-1">
                        <a href="{{ route('tmbhsiswa') }}" class="btn btn-sm btn-success rounded"><i
                                class="fa-solid fa-plus"></i> tambah pasien</a>
                    </h3>
                    <h3 class="p-1">
                        <a href="/logout" class="btn btn-sm btn-danger rounded"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-center table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Wali Kelas</th>
                            <th>Keluhan/Gejala</th>
                            <th>Status Pengobatan</th>
                            <th>Tanggal Sakit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">

                        @foreach ($sakit as $no => $sakit)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $sakit->nama }}</td>
                                <td>{{ $sakit->kelas }}</td>
                                <td>{{ $sakit->wali_kelas }}</td>
                                <td>{{ $sakit->keluhan }}</td>
                                <td>{{ $sakit->status }}</td>
                                <td>{{ $sakit->tanggal }}</td>
                                <td>
                                    <form action="{{ route('hapus', $sakit->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
