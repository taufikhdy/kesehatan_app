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
            $badge = $notsa->isNotEmpty();
            $badge = $notsi->isNotempty();
        @endphp
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown" id="notif">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                    @if ($badge)
                        <i class="bi bi-bell-fill me-lg-2" id="danger"></i>
                        <span class="d-none d-lg-inline-flex">Notification</span>
                    @else
                        <i class="bi bi-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notification</span>
                    @endif

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
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all notifications</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">


                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div>
                                <div class="btn-wrapper mb-3">
                                    <a href="#" class="btn btn-success align-items-center"> <i
                                            class="fas fa-paper-plane"></i>
                                        Share</a>
                                    <a href="#" class="btn btn-primary" onclick="window.print()"><i
                                            class="fas fa-print"></i>
                                        Print</a>
                                </div>
                            </div>
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                href="#data_siswa" role="tab" aria-controls="data_siswa"
                                                aria-selected="true">Data Siswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                href="#data_siswi" role="tab" aria-selected="false">Data Siswi</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active mb-5" id="data_siswa" role="tabpanel"
                                        aria-labelledby="data_siswa">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-rounded p-3" style="overflow: auto">
                                                            <div class="card-body">
                                                                <p class="card-title mb-0">Data Rekam Medis Pasien Siswa</p>
                                                                <div class="table-responsive text-nowrap">
                                                                    <table class="table table-hover table-bordered">
                                                                        <thead class="table-primary text-center">
                                                                            <tr class="text-dark">
                                                                                <th>Nama</th>
                                                                                <th>Kelas</th>
                                                                                <th>Wali Kelas</th>
                                                                                <th>Keluhan</th>
                                                                                <th>Tanggal</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($siswa as $siswa)
                                                                                <tr>
                                                                                    <td class="d-none">{{ $siswa->id}}</td>
                                                                                    <td>{{ $siswa->nama }}</td>
                                                                                    <td>{{ $siswa->kelas }}</td>
                                                                                    <td>{{ $siswa->wali_kelas }}</td>
                                                                                    <td>{{ $siswa->keluhan }}</td>
                                                                                    <td class="text-center">{{ $siswa->tanggal }}</td>
                                                                                    <td class="text-center">
                                                                                        <a href="{{ route('konfirmasi', ['kelas'=>$siswa->kelas, 'id'=>$siswa->id])}}" method="POST"
                                                                                            class="btn btn-sm btn-success">Konfirmasi</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade mb-5" id="data_siswi" role="tabpanel"
                                        aria-labelledby="data_siswi">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-rounded p-3" style="overflow: auto">
                                                            <div class="card-body">
                                                                <p class="card-title mb-0">Data Rekam Medis Pasien Siswi</p>
                                                                <div class="table-responsive text-nowrap">
                                                                    <table class="table table-hover table-bordered">
                                                                        <thead class="table-primary text-center">
                                                                            <tr class="text-dark">
                                                                                <th>Nama</th>
                                                                                <th>Kelas</th>
                                                                                <th>Wali Kelas</th>
                                                                                <th>Keluhan</th>
                                                                                <th>Tanggal</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($siswi as $siswi)
                                                                                <tr>
                                                                                    <td class="d-none">{{ $siswi->id}}</td>
                                                                                    <td>{{ $siswi->nama }}</td>
                                                                                    <td>{{ $siswi->kelas }}</td>
                                                                                    <td>{{ $siswi->wali_kelas }}</td>
                                                                                    <td>{{ $siswi->keluhan }}</td>
                                                                                    <td class="text-center">{{ $siswi->tanggal }}</td>
                                                                                    <td class="text-center">
                                                                                        <a href="{{ route('konfirmasi', ['kelas'=>$siswi->kelas, 'id'=>$siswi->id])}}" method="POST"
                                                                                            class="btn btn-sm btn-success">Konfirmasi</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
