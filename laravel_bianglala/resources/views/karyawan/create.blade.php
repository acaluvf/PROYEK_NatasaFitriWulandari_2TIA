@extends('template.home')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mx-auto mt-5">
                        <h3 class="mb-4">Tambah Karyawan</h3>
                        <p class="mb-4">Masukkan data karyawan sesuai dengan data yang sebenar-benarnya</p>
                        <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan:</label>
                                <input type="text" name="jabatan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status:</label>
                                <input type="text" name="status" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK:</label>
                                <input type="text" name="nik" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_kontrak" class="form-label">No. Kontrak:</label>
                                <input type="text" name="no_kontrak" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="masa_kontrak" class="form-label">Masa Kontrak:</label>
                                <input type="text" name="masa_kontrak" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary mt-2">Kembali</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ... (Footer Content) ... -->
    </div>
    @endsection
