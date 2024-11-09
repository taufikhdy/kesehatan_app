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
    <link rel="stylesheet" href="{{ asset('template-admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" />

</head>

<body>

    <div class="container card card-rounded p-3 mt-5 mb-5" style="overflow: auto">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
                <h2>Data Siswi</h2>
                <div class="d-flex justify-center align-items-center">
                    <h3>
                        <a href="{{ route('tmbhsiswi') }}" class="btn btn-sm btn-success rounded"><i
                                class="fa-solid fa-plus"></i> tambah pasien</a>
                    </h3>
                    <h3>
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
                        </tr>
                    </thead>
                    <tbody class="text-center">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
