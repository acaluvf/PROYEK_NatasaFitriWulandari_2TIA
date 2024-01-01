@extends('template.home')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Riwayat Evaluasi Kinerja</h2>

        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari Karyawan...">
        </div>

        <!-- Tabel Riwayat Evaluasi -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Catatan</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($evaluasis as $evaluasi)
                        <tr>
                            <td>{{ $evaluasi->nama }}</td>
                            <td>{{ $evaluasi->jabatan }}</td>
                            <td>{{ $evaluasi->catatan }}</td>
                            <td>{{ $evaluasi->rating }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data evaluasi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
