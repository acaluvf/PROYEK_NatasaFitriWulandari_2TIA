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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gajiList as $gaji)
                    <tr>
                        <td>{{ $gaji->nama }}</td>
                        <td>{{ $gaji->jabatan }}</td>
                        <td>{{ $gaji->jadwal_pengambilan }}</td>
                        <td>{{ ucfirst($gaji->status) }}</td>
                        <td>
                            @if ($gaji->status == 'belum_diambil')
                                <a href="{{ route('gaji.ambil', $gaji->id) }}" class="btn btn-success">Bayar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
