@extends('template.home')
@section('content')
    <div class="container">
        <h2>Edit Karyawan</h2>
        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $karyawan->jabatan }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $karyawan->status }}" required>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" value="{{ $karyawan->nik }}" required>
            </div>

            <div class="mb-3">
                <label for="no_kontrak" class="form-label">No. Kontrak</label>
                <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" value="{{ $karyawan->no_kontrak }}" required>
            </div>

            <div class="mb-3">
                <label for="masa_kontrak" class="form-label">Masa Kontrak</label>
                <input type="text" class="form-control" id="masa_kontrak" name="masa_kontrak" value="{{ $karyawan->masa_kontrak }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
