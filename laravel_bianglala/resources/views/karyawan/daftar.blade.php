@extends('template.home')

@section('title', 'Data Karyawan')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Karyawan</span>
                    <form action="{{ route('karyawan.search') }}" method="GET" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary">Cari</button>
                            </div>
                        </div>
                    </form>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jabatan }}</td>
                                <td>{{ $karyawan->status }}</td>
                                <td>{{ $karyawan->nik }}</td>
                                <td>{{ $karyawan->no_kontrak }}</td>
                                <td>{{ $karyawan->masa_kontrak }}</td>
                                <td>
                                    <a href="{{ route('karyawan.show', $karyawan->id) }}"
                                        class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('karyawan.edit', $karyawan->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
