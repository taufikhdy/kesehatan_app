<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Divisi Kesehatan | IP4A</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('image/kesehatan.png') }}" type="image/x-icon">


    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('poskestren/assets/vendor/css/core.css')}}" />
    <link rel="stylesheet" href="{{ asset('poskestren/assets/vendor/css/theme-default.css')}}" />
    <link rel="stylesheet" href="{{ asset('poskestren/assets/css/demo.css')}}" />

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="container card card-rounded p-3 mt-5 mb-5" style="overflow: auto">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
                <h2 class="text-white">Data Siswi</h2>
                <div class="d-flex justify-center align-items-center">
                    <h3 class="p-1">
                        <a href="{{ route('tmbhsiswi') }}" class="btn btn-success rounded"><i class="bi bi-person-fill-add"></i>tambah pasien</a>
                    </h3>
                    <h3 class="p-1">
                        <a href="/logout" class="btn btn-danger rounded"><i class="bi bi-box-arrow-left"></i> Logout</a>
                    </h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
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
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-person-dash-fill"></i> Delete</button>
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
