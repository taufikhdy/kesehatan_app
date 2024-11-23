@extends('poskes.dashboard')
@section('content')
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="bi bi-hospital"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control border-0" type="search" placeholder="Search">
        </form>

        @php
            $badgem = $notsa->isNotEmpty();
            $badgew = $notsi->isNotempty();
        @endphp
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown" id="notif">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                    @if ($badgem or $badgew)
                        <i class="bi bi-bell-fill me-lg-2" id="badge"></i>
                    @else
                        <i class="bi bi-bell me-lg-2"></i>
                    @endif

                    <span class="d-none d-lg-inline-flex">Notifikasi</span>

                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">

                    @foreach ($notsa as $notif)
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">{{ $notif->nama }}</h6>
                            <small>{{ $notif->tanggal }}</small>
                        </a>
                    @endforeach
                    @foreach ($notsi as $notif)
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">{{ $notif->nama }}</h6>
                            <small>{{ $notif->tanggal }}</small>
                        </a>
                    @endforeach
                    {{-- <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">Lihat Semua notifikasi</a> --}}
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Siswa Sakit</p>
                        <h6 class="mb-0">{{ $totalm }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x" style="color: deeppink;"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Siswi Sakit</p>
                        <h6 class="mb-0">{{ $totalw }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Jumlah Keseluruhan</p>
                        <h6 class="mb-0">{{ $totalm + $totalw }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Tabel Cepat</h6>
                <a href="{{ route('data_sakit') }}">Lihat Semua</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table text-start align-middle table-bordered table-hover mb-0" style="border: darkgray;">
                    <thead class="table-primary">
                        <tr class="text-dark">
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Wali Kelas</th>
                            <th>Keluhan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notsa as $siswa)
                            <tr style="background-color: rgba(0, 255, 255, 0.20);">
                                <td class="d-none">{{ $siswa->id }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->wali_kelas }}</td>
                                <td>{{ $siswa->keluhan }}</td>
                                <td>{{ $siswa->status }}</td>
                                <td class="text-center">
                                    <a href="{{ route('konfirmasi', ['kelas' => $siswa->kelas, 'id' => $siswa->id]) }}"
                                        class="btn btn-sm btn-success
                            ">Konfirmasi</a>
                                </td>
                            </tr>
                        @endforeach

                        @foreach ($notsi as $siswi)
                            <tr style="background-color: rgba(255, 169, 184, 0.20)">
                                <td class="d-none">{{ $siswi->id }}</td>
                                <td>{{ $siswi->nama }}</td>
                                <td>{{ $siswi->kelas }}</td>
                                <td>{{ $siswi->wali_kelas }}</td>
                                <td>{{ $siswi->keluhan }}</td>
                                <td>{{ $siswi->status }}</td>
                                <td class="text-center">
                                    <a href="{{ route('konfirmasi', ['kelas' => $siswi->kelas, 'id' => $siswi->id]) }}"
                                        class="btn btn-sm btn-success
                        ">Konfirmasi</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Kalender</h6>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                        <strong>Pastikan data diperiksa saksama agar tidak ada siswa sakit yang terlewat</strong> <button
                            type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if ($badgem or $badgew)
        <div class="alert alert-warning alert-dismissible fade show fixed-bottom m-0" role="alert">
            <strong>Data baru telah ditemukan, segera periksa</strong> <button type="button" class="btn-close"
                data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
@endsection
