@extends('template.home')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Karyawan</span>
                    <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari Karyawan...">
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>NIK</th>
                            <th>No. Kontrak</th>
                            <th>Masa Kontrak</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawans as $karyawan)
                            <tr>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jabatan }}</td>
                                <td>{{ $karyawan->status }}</td>
                                <td>{{ $karyawan->nik }}</td>
                                <td>{{ $karyawan->no_kontrak }}</td>
                                <td>{{ $karyawan->masa_kontrak }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
            </div>
        </div>
    </div>
@endsection
