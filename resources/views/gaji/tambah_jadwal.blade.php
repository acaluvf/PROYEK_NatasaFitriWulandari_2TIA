@extends('template.home')

@section('content')
    <div class="container">
        <h2>Formulir Jadwal Gaji</h2>
        <form action="{{ route('gaji.simpan') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="jadwal_pengambilan" class="form-label">Jadwal Pengambilan</label>
                <input type="date" class="form-control" id="jadwal_pengambilan" name="jadwal_pengambilan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
