<?php

// app/Http/Controllers/GajiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;

class GajiController extends Controller
{
    public function tambahJadwalGajiForm()
    {
        return view('gaji.tambah_jadwal');
    }

    public function simpanJadwalGaji(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'jadwal_pengambilan' => 'required|date',
        ]);

        $gaji = Gaji::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jadwal_pengambilan' => $request->jadwal_pengambilan,
            'status' => 'belum_diambil',
        ]);

        return redirect()->route('gaji.riwayat');
    }

    public function riwayatGaji()
    {
        $gajiList = Gaji::all();
        return view('gaji.riwayat', compact('gajiList'));
    }

    public function ambilGaji($id)
    {
        $gaji = Gaji::findOrFail($id);
        $gaji->status = 'diambil';
        $gaji->save();

        return redirect()->route('gaji.riwayat');
    }
    public function informasiGaji()
    {
        $gajiList = Gaji::all();
        return view('gaji.informasi', compact('gajiList'));
    }
}

