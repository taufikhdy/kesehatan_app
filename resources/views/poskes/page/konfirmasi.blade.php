@extends('poskes.dashboard')
@section('content')

<div class="container my-5">
    <div class="card border-bottom-0 rounded">
        <div class="d-flex justify-content-between align-items-center bg-primary p-3 text-white rounded-top">
            <h2 class="text-white">Tambah Pasien</h2>
            <h3><a href="{{ route('data_sakit') }}" class="btn btn-danger rounded"><i class="bi bi-x-square"></i>
                    Back</a></h3>
        </div>
        <div class="card-body">
            <p class="card-title">Tambahkan Data Pasien</p>
            {{-- @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}
            <form action="{{ route('check') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $data->kelas)}}" class="form-control @error('kelas') is-invalid @enderror" readonly required>

                    @error('kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="wali_kelas" class="form-label">Wali Kelas</label>
                    <input type="text" name="wali_kelas" id="wali_kelas"
                        class="form-control @error('wali_kelas') is-invalid @enderror" required value="{{ old('wali_kelas', $data->wali_kelas)}}"
                        placeholder="Wali Kelas" readonly>
                    @error('wali_kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $data->nama)}}"
                        class="form-control @error('nama') is-invalid @enderror" readonly required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <input type="text" name="keluhan" id="keluhan" value="{{ old('keluhan', $data->keluhan)}}"
                        class="form-control @error('keluhan') is-invalid @enderror" readonly required>
                    @error('keluhan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5 mt-5">
                    <label for="status" class="form-label">Status Pengobatan</label>
                    <select name="status" id="status"
                        class="form-select @error('status') is-invalid @enderror" required>

                        <option value="{{ old('status', $data->status)}}">{{ old('status', $data->status)}}</option>
                        <option value="Sudah Berobat">Sudah Berobat</option>

                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </select>

                </div>

                <div class="mb-5 mt-3">
                    <label for="catatan" class="form-label">Catatan Pengobatan</label>
                    <textarea rows="5" name="catatan" id="catatan"
                        class="form-control @error('catatan') is-invalid @enderror" required placeholder="Catatan : ( Opsional )"></textarea>
                    @error('catatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tanggal" class="form-label">Tanggal Berobat</label>
                    <input type="text" name="tanggal" id="tanggal" value="{{ today()->toDateString()}}"
                        class="form-control @error('tanggal') is-invalid @enderror" readonly required>
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary" style="color: white"><i
                        class="bi bi-check-square"></i>  Konfirmasi</button>
            </form>
        </div>
    </div>
</div>

@endsection
