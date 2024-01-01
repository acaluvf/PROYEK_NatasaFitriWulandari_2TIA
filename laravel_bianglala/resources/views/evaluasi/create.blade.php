@extends('template.home')

@section('content')
    <div class="container">
        <h2>Formulir Evaluasi Kinerja</h2>
        <form action="{{ route('evaluasi.store') }}" method="post">
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
                <label for="catatan" class="form-label">Catatan Evaluasi</label>
                <textarea class="form-control" id="catatan" name="catatan" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <select class="form-select" id="rating" name="rating" required>
                    <option value="bagus">Bagus</option>
                    <option value="cukup">Cukup</option>
                    <option value="buruk">Buruk</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Evaluasi</button>
        </form>
    </div>
@endsection
