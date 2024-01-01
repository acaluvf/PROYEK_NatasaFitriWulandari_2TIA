@extends('template.home')

@section('content')
    <div class="container">
        <h2>Profil Karyawan</h2>
        <p>Nama: {{ $karyawan->nama }}</p>
        <p>Email: {{ $karyawan->email }}</p>
        <p>Jabatan: {{ $karyawan->jabatan }}</p>

        <h3>Informasi Kontak</h3>
        <p>Alamat: {{ $profil->alamat }}</p>
        <p>Telepon: {{ $profil->telepon }}</p>

        <h3>Evaluasi Kinerja</h3>
        <!-- Tampilkan evaluasi kinerja jika ada -->
        @if($karyawan->evaluasis->count() > 0)
            <ul>
                @foreach($karyawan->evaluasis as $evaluasi)
                    <li>
                        <strong>Rating:</strong> {{ $evaluasi->rating }} |
                        <strong>Catatan:</strong> {{ $evaluasi->catatan }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>Belum ada evaluasi kinerja.</p>
        @endif

        <a href="{{ route('profil.edit') }}" class="btn btn-primary">Ubah Profil</a>
    </div>
@endsection
