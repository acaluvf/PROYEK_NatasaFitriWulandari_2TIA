@extends('template.home')
@section('content')
    <div class="container">
        <h2>Detail Karyawan</h2>
        @if ($karyawan)
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $karyawan->nama }}</td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{ $karyawan->jabatan }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $karyawan->status }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $karyawan->nik }}</td>
                </tr>
                <tr>
                    <th>No. Kontrak</th>
                    <td>{{ $karyawan->no_kontrak }}</td>
                </tr>
                <tr>
                    <th>Masa Kontrak</th>
                    <td>{{ $karyawan->masa_kontrak }}</td>
                </tr>
        
            </table>
            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-primary">Edit Karyawan</a>
        @else
            <p>Karyawan tidak ditemukan.</p>
        @endif
    </div>
@endsection
