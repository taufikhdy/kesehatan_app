@extends('homepage.bagian.main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div>
            <div class="btn-wrapper mb-3">
                <a href="#" class="btn btn-success align-items-center wow fadeInDown" data-wow-duration="3.5s" data-wow-delay="0.2s"> <i class="fas fa-paper-plane"></i> Share</a>
                <a href="#" class="btn btn-primary wow fadeInDown" data-wow-duration="5s" data-wow-delay="0.2s" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
            </div>
        </div>
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#rekammedissiswa" role="tab" aria-controls="rekammedissiswa" aria-selected="true"><i class="fas fa-person"></i>  <i class="fas fa-stethoscope"></i>  Rekam Medis Pasien Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#rekammedissiswi" role="tab" aria-selected="false"><i class="fas fa-female"></i>  <i class="fas fa-stethoscope"></i>  Rekam Medis Pasien Siswi</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content tab-content-basic wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="tab-pane fade show active mb-5" id="rekammedissiswa" role="tabpanel" aria-labelledby="rekammedissiswa">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <div class="row flex-grow">
                                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                    <div class="card card-rounded p-3" style="overflow: auto">
                                        <div class="card-body">
                                            <p class="card-title mb-0 wow fadeInUp" data-wow-duration="5s" data-wow-delay="0.5s">Data Rekam Medis Pasien Siswa</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover text-nowrap">
                                                    <thead class="text-center bg-primary text-white wow fadeInDown" data-wow-duration="5s" data-wow-delay="0.5s">
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
                                                    <tbody class="wow fadeInDown" data-wow-duration="5s" data-wow-delay="0.5s"">
                                                         @foreach($siswaberobat as $no=>$item)
                                                        <tr style="font-size: 14px">
                                                            <td>{{ $no+1 }}</td>
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

                <div class="tab-pane fade mb-5" id="rekammedissiswi" role="tabpanel" aria-labelledby="rekammedissiswi">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <div class="row flex-grow">
                                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                    <div class="card card-rounded p-3" style="overflow: auto">
                                        <div class="card-body">
                                            <p class="card-title mb-0 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">Data Rekam Medis Pasien Siswi</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover text-nowrap">
                                                    <thead class="text-center bg-primary text-white wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
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
                                                    <tbody class="wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
                                                        @foreach($siswiberobat as $no=>$item)
                                                        <tr style="font-size: 14px">
                                                            <td>{{ $no+1 }}</td>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->kelas }}</td>
                                                            <td>{{ $item->wali_kelas }}</td>
                                                            <td>{{ $item->keluhan }}</td>
                                                            <td>{{ $item->tgl_sakit }}</td>
                                                            <td>{{ $item->tgl_berobat }}</td>
                                                            <td class="d-flex">
                                                                <a href="{{ route('show.siswi', $item->id) }}" style="padding: 14px; border-radius:8px;" class="btn-sm btn-warning">Show</a>
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
@endsection

<!-- Add this CSS to make the table responsive -->

