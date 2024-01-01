@extends('template.home')

@section('content')
    <div class="container">
        <h2>Riwayat Evaluasi Kinerja</h2>

        <!-- Tabel Riwayat Evaluasi -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Catatan</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluasis as $evaluasi)
                    <tr>
                        <td>{{ $evaluasi->nama }}</td>
                        <td>{{ $evaluasi->jabatan }}</td>
                        <td>{{ $evaluasi->catatan }}</td>
                        <td>{{ $evaluasi->rating }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
