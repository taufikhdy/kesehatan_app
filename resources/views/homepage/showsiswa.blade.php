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

{{-- main content --}}

<div class="col-md-11 grid-margin stretch-card mt-4 ms-4">
    <div class="card border-bottom-0">
        <div class="card-body pb-0">
            <div class="row">
                <!-- Card Body Pertama -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Kelas</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Wali Kelas</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Keluhan</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Status Pengobatan</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ $siswa-> }}" readonly>
                    </div>
                </div>

                <!-- Card Body Kedua -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Dokter</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Sakit</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Berobat</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Kunjungan</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ $siswa-> }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ $siswa-> }}" readonly>
                    </div>
                </div>
                <!-- Card Body Ketiga -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Catatan Dokter</label>
                        <textarea class="form-control text-dark" cols="30" rows="5" readonly>{{ $siswa-> }}</textarea>
                    </div>
                    <div class="mb-3 d-flex">
                        <a href="{{ route('fullrekammedis') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end main --}}

@endsection
