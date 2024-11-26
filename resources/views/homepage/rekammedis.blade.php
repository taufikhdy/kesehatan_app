@extends('homepage.bagian.main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <style>
            @media print {
                /* Sembunyikan kolom Option */
                .table th:last-child, /* Header kolom terakhir (Option) */
                .table td:last-child { /* Sel kolom terakhir (Option) */
                    display: none !important;
                }

                /* Kurangi jarak di atas tabel */
                #printArea {
                    margin-top: 0 !important;
                    padding-top: 0 !important;
                }

                /* Tampilkan warna background */
                body {
                    -webkit-print-color-adjust: exact; /* Untuk browser berbasis Webkit (Chrome, Edge, dll.) */
                    print-color-adjust: exact; /* Standar */
                }

                /* Styling tabel */
                .table thead {
                    background-color: #007bff !important; /* Warna biru */
                    color: white !important; /* Teks putih */
                }

                .table tbody tr:nth-child(even) {
                    background-color: #f2f2f2 !important; /* Warna abu-abu muda untuk baris genap */
                }

                .table tbody tr:nth-child(odd) {
                    background-color: #ffffff !important; /* Warna putih untuk baris ganjil */
                }

                /* Atur margin halaman cetak */
                @page {
                    size: landscape;
                    margin: 10mm; /* Atur sesuai kebutuhan */
                }

                /* Sembunyikan elemen di luar area cetak */
                body * {
                    visibility: hidden;
                }

                /* Tampilkan hanya area cetak */
                #printArea, #printArea * {
                    visibility: visible;
                }
                #printArea {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                }
            }
        </style>

        <div>
            <div class="btn-wrapper mb-3">
                <a href="#" class="btn btn-success align-items-center"> <i class="fas fa-paper-plane"></i> Share</a>
                <a href="#" class="btn btn-primary" onclick="printTable()"><i class="fas fa-print"></i> Print</a>
            </div>
        </div>
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#rekammedissiswa" role="tab" aria-controls="rekammedissiswa" aria-selected="true"><i class="fas fa-person"></i>  <i class="fas fa-stethoscope"></i>  Rekam Medis Pasien Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#rekammedissiswi" role="tab" aria-selected="false"><i class="fas fa-female"></i>  <i class="fas fa-stethoscope"></i>  Rekam Medis Pasien Siswi</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content tab-content-basic">
                <!-- Tabel Siswa -->
                <div class="tab-pane fade show active mb-5" id="rekammedissiswa" role="tabpanel" aria-labelledby="rekammedissiswa">
                    <div id="printArea" class="table-responsive">
                        <!-- Header Laporan -->
                        <h2 style="text-align: center; display: none;" class="text-primary" id="klinik">Klinik Pratama Al-Ittihad</h2>
                        <h3 style="text-align: center; margin-bottom: 20px;" class="text-primary">Laporan Rekam Medis Pasien Siswa</h3>
                        <table class="table table-hover text-nowrap">
                            <thead class="text-center bg-primary text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Keluhan</th>
                                    <th>Tanggal Sakit</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                                        <a href="{{ route('show.siswa', $item->id) }}" class="btn-sm btn-warning">Lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Tabel Siswa -->
                <div class="tab-pane fade mb-5" id="rekammedissiswi" role="tabpanel" aria-labelledby="rekammedissiswi">
                    <div id="printArea" class="table-responsive">
                        <!-- Header Laporan -->
                        <h2 style="text-align: center; display: none;" class="text-primary" id="klinik">Klinik Pratama Al-Ittihad</h2>
                        <h3 style="text-align: center; margin-bottom: 20px;" class="text-primary">Laporan Rekam Medis Pasien Siswi</h3>
                        <table class="table table-hover text-nowrap">
                            <thead class="text-center bg-primary text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Keluhan</th>
                                    <th>Tanggal Sakit</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                                        <a href="{{ route('show.siswi', $item->id) }}" class="btn-sm btn-warning">Lihat</a>
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

<!-- JavaScript untuk mencetak tabel -->
<script>
    function printTable() {
        window.print();
    }
</script>
@endsection
