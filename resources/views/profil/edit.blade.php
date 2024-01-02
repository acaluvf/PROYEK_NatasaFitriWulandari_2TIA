@extends('template.home')

@section('content')
    <div class="container">
        <h2>Ubah Profil Karyawan</h2>
        <form action="{{ route('profil.update') }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $profil->alamat }}" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $profil->telepon }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
