@extends('homepage.bagian.main')
@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                    <div class="col-lg-12">
                    <h3>"Kesehatan Adalah Mahkota, yang
                        Tidak diketahui kecuali oleh Orang yang Sakit"</h3>
                    <p>kesehatan adalah hal yang sangat berharga, namun sering kali tidak disadari nilainya hingga seseorang jatuh sakit. Ini mengingatkan kita untuk menghargai dan menjaga kesehatan selagi masih memilikinya.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.5s">
                <img src="{{ asset('image/logo.png') }}" alt="Logo">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-panel">
    <div class="content-wrapper">
        <div>
            <div class="btn-wrapper mb-3">
                <a href="#" class="btn btn-success align-items-center"> <i class="fas fa-paper-plane"></i> Share</a>
                <a href="#" class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
            </div>
        </div>
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#rekammedissiswa" role="tab" aria-controls="rekammedissiswa" aria-selected="true">Rekam Medis Pasien Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#rekammedissiswi" role="tab" aria-selected="false">Rekam Medis Pasien Siswi</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active mb-5" id="rekammedissiswa" role="tabpanel" aria-labelledby="rekammedissiswa">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <div class="row flex-grow">
                                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                    <div class="card card-rounded p-3" style="overflow: auto">
                                        <div class="card-body">
                                            <p class="card-title mb-0">Data Rekam Medis Pasien Siswa</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead class="text-center bg-primary text-white">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Kelas</th>
                                                            <th>Keluhan</th>
                                                            <th>Dokter</th>
                                                            <th>Tanggal Kunjungan</th>
                                                            <th>Obat Yang Diberikan</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="">
                                                        {{-- @foreach($datapasiensiswa as $no=>$item)
                                                        <tr style="font-size: 14px">
                                                            <td>{{ $no+1 }}</td>
                                                            <td>{{ $item['nama_lengkap'] }}</td>
                                                            <td>{{ $item['kelas'] }}</td>
                                                            <td>{{ $item['keluhan'] }}</td>
                                                            <td>{{ $item['nama_dokter'] }}</td>
                                                            <td>{{ $item['tanggal_berobat'] }}</td>
                                                            <td>{{ $item['nama_obat'] }}</td>
                                                            <td class="d-flex">
                                                                <a href="{{ route('datalengkap.siswa', $item['id']) }}" class="btn btn-outline-warning">Show</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach --}}
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

                <div class="tab-pane fade mb-5" id="rekammedissiswi" role="tabpanel" aria-labelledby="rekammedissiswi">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <div class="row flex-grow">
                                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                    <div class="card card-rounded p-3" style="overflow: auto">
                                        <div class="card-body">
                                            <p class="card-title mb-0">Data Rekam Medis Pasien Siswi</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead class="text-center bg-primary text-white">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Kelas</th>
                                                            <th>Keluhan</th>
                                                            <th>Dokter</th>
                                                            <th>Tanggal Kunjungan</th>
                                                            <th>Obat Yang Diberikan</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="">
                                                        {{-- @foreach($datapasiensiswi as $no=>$item)
                                                        <tr style="font-size:14px">
                                                            <td>{{ $no+1 }}</td>
                                                            <td>{{ $item['nama_lengkap'] }}</td>
                                                            <td>{{ $item['kelas'] }}</td>
                                                            <td>{{ $item['keluhan'] }}</td>
                                                            <td>{{ $item['nama_dokter'] }}</td>
                                                            <td>{{ $item['tanggal_berobat'] }}</td>
                                                            <td>{{ $item['nama_obat'] }}</td>
                                                            <td class="d-flex">
                                                                <a href="{{ route('datalengkap.siswi', $item['id']) }}" class="btn btn-outline-warning">Show</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach --}}
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
@endsection

<!-- Add this CSS to make the table responsive -->

