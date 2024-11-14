@extends('homepage.bagian.main')
@section('content')
  {{-- main content --}}
  <div class="mt-5 home-tab container">
    <div class="d-sm-flex align-items-center justify-content-between border-bottom wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#siswa"
                    role="tab" aria-controls="siswa" aria-selected="true"><i class="fas fa-person"></i>Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#siswi"
                    role="tab" aria-selected="false"><i class="fas fa-female me-2"></i>Siswi</a>
            </li>
        </ul>
    </div>
    <div class="tab-content tab-content-basic">

        <div class="tab-pane fade show active mb-5" id="siswa" role="tabpanel"
            aria-labelledby="siswa">
            <h2 class="bg-primary p-3 rounded-bottom text-white mb-2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Data Siswa</h2>
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#siswabelumberobat"
                                role="tab" aria-controls="siswabelumberobat" aria-selected="true">Pasien Belum Berobat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#siswasudahberobat"
                                role="tab" aria-selected="false">Pasien Sudah Berobat</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-content-basic wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="tab-pane fade show active mb-5" id="siswabelumberobat" role="tabpanel"
                        aria-labelledby="siswabelumberobat">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                        <div class="card card-rounded p-3" style="overflow: auto">
                                            <div class="card-body">
                                                <p class="card-title mb-0">Data Pasien Siswa</p>
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
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach ($sakit as $no => $sakit)
                                                                <tr>
                                                                    <td>{{$no + 1}}</td>
                                                                    <td>{{$sakit->nama}}</td>
                                                                    <td>{{$sakit->kelas}}</td>
                                                                    <td>{{$sakit->wali_kelas}}</td>
                                                                    <td>{{$sakit->keluhan}}</td>
                                                                    <td>{{$sakit->status}}</td>
                                                                    <td>{{$sakit->tanggal}}</td>
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

                    <div class="tab-pane fade mb-5" id="siswasudahberobat" role="tabpanel" aria-labelledby="siswasudahberobat">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                        <div class="card card-rounded p-3" style="overflow: auto">
                                            <div class="card-body">
                                                <p class="card-title mb-0">Data Pasien Siswa</p>
                                                <div class="table-responsive">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead class="text-center table-primary">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pasien</th>
                                                                <th>Kelas</th>
                                                                <th>Wali Kelas</th>
                                                                <th>Keluhan</th>
                                                                <th>Tanggal Kunjungan</th>
                                                                <th>Obat Yang Diberikan</th>
                                                                <th>Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach ($siswaberobat as $no => $item)
                                                                <tr>
                                                                    <td>{{ $no + 1 }}</td>
                                                                    <td>{{ $item->nama }}</td>
                                                                    <td>{{ $item->kelas }}</td>
                                                                    <td>{{ $item->wali_kelas }}</td>
                                                                    <td>{{ $item->keluhan }}</td>
                                                                    <td>{{ $item->tgl_sakit }}</td>
                                                                    <td>{{ $item->tgl_berobat }}</td>
                                                                    <td class="d-flex">
                                                                        <a href="{{ route('show.siswa', $item->id) }}" style="padding: 14px; border-radius:8px;" class="btn-sm btn-warning">Lihat</a>
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

        <div class="tab-pane fade mb-5" id="siswi" role="tabpanel" aria-labelledby="siswi">
            <h2 class="bg-primary p-3 rounded-bottom text-white mb-2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Data Siswi</h2>
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#siswibelumberobat"
                                role="tab" aria-controls="siswibelumberobat" aria-selected="true">Pasien Belum Berobat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#siswisudahberobat"
                                role="tab" aria-selected="false">Pasien Sudah Berobat</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content tab-content-basic wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="tab-pane fade show active mb-5" id="siswibelumberobat" role="tabpanel"
                        aria-labelledby="siswibelumberobat">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                        <div class="card card-rounded p-3" style="overflow: auto">
                                            <div class="card-body">
                                                <p class="card-title mb-0">Data Pasien Siswi</p>
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
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach ($siswisakit as $no => $sakit)
                                                                <tr>
                                                                    <td>{{ $no + 1 }}</td>
                                                                    <td>{{ $sakit->nama }}</td>
                                                                    <td>{{ $sakit->kelas }}</td>
                                                                    <td>{{ $sakit->wali_kelas }}</td>
                                                                    <td>{{ $sakit->keluhan }}</td>
                                                                    <td>{{ $sakit->status }}</td>
                                                                    <td>{{ $sakit->tanggal }}</td>
                                                                    {{-- untuk di table sudah berobat dan di rekam medis --}}
                                                                    {{-- <td>
                                                                        <a href="{{ route('show.siswi', $sakit->id) }}" style="padding: 14px; border-radius:8px;" class="btn-sm btn-warning">Lihat</a>
                                                                    </td> --}}
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

                    <div class="tab-pane fade mb-5" id="siswisudahberobat" role="tabpanel" aria-labelledby="siswisudahberobat">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                        <div class="card card-rounded p-3" style="overflow: auto">
                                            <div class="card-body">
                                                <p class="card-title mb-0">Data Pasien Siswi</p>
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
                                                                <th>Tanggal Berobat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach ($siswiberobat as $no => $item)
                                                                <tr>
                                                                    <td>{{ $no + 1 }}</td>
                                                                    <td>{{ $item->nama }}</td>
                                                                    <td>{{ $item->kelas }}</td>
                                                                    <td>{{ $item->wali_kelas }}</td>
                                                                    <td>{{ $item->keluhan }}</td>
                                                                    <td>{{ $item->tgl_sakit }}</td>
                                                                    <td>{{ $item->tgl_berobat }}</td>
                                                                    <td class="d-flex">
                                                                        <a href="{{ route('show.siswi', $item->id) }}" style="padding: 14px; border-radius:8px;" class="btn-sm btn-warning">Lihat</a>
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
    {{-- end main content --}}
@endsection

