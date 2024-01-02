@extends('template.home')

@section('content')
    <div class="container">
        <h2>Riwayat Gaji</h2>
        <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari Karyawan...">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Jadwal Pengambilan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gajiList as $gaji)
                    <tr>
                        <td>{{ $gaji->nama }}</td>
                        <td>{{ $gaji->jabatan }}</td>
                        <td>{{ $gaji->jadwal_pengambilan }}</td>
                        <td>{{ $gaji->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
