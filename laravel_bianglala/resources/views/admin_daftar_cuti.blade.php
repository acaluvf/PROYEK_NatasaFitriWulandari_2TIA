<!-- resources/views/admin_daftar_cuti.blade.php -->

@extends('template.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2>Daftar Cuti Karyawan</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statusCutis as $statusCuti)
                            <tr>
                                <td>{{ $statusCuti->nama }}</td>
                                <td>{{ $statusCuti->jabatan }}</td>
                                <td>{{ $statusCuti->tanggal_mulai }}</td>
                                <td>{{ $statusCuti->tanggal_selesai }}</td>
                                <td>{{ $statusCuti->alasan }}</td>
                                <td>{{ $statusCuti->status }}</td>
                                <td>
                                    <a href="/admin-daftar-cuti/setuju/{{  $statusCuti->id }}" class="btn btn-success">Setuju</a>
                                    <a href="/admin-daftar-cuti/reject/{{  $statusCuti->id }}" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
