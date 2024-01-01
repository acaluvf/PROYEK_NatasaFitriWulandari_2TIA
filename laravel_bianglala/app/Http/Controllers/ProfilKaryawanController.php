<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilKaryawan;
use Auth;

class ProfilKaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Auth::user();

        return view('profil.index', compact('karyawan', 'profil'));
    }

    public function edit()
    {
        $karyawan = Auth::user();
        $profil = $karyawan->profilKaryawan;

        return view('profil.edit', compact('karyawan', 'profil'));
    }

    public function update(Request $request)
    {
        $karyawan = Auth::user();
        $profil = $karyawan->profilKaryawan;

        $request->validate([
            'alamat' => 'required|string',
            'telepon' => 'required|string',
        ]);

        $profil->update($request->all());

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui.');
    }
}
