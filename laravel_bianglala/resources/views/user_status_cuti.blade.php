<!-- resources/views/user_status_cuti.blade.php -->

@extends('template.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2>Daftar Status Cuti</h2>
                <a href="{{ route('user_status_cuti.create') }}" class="btn btn-primary">Tambah Pengajuan Cuti</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Alasan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($statusCutis as $statusCuti)
                            <tr>
                                <td>{{ $statusCuti->nama }}</td>
                                <td>{{ $statusCuti->jabatan }}</td>
                                <td>{{ $statusCuti->tanggal_mulai }}</td>
                                <td>{{ $statusCuti->tanggal_selesai }}</td>
                                <td>{{ $statusCuti->alasan }}</td>
                                <td>{{ $statusCuti->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
