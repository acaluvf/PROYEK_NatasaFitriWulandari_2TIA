<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
      

        Karyawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'status' => $request->status,

            'nik' => $request->nik,
            'no_kontrak' => $request->no_kontrak,
            'masa_kontrak' => $request->masa_kontrak,

        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);

        // Validasi data yang diterima dari formulir
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'no_kontrak' => 'required|string|max:255',
            'masa_kontrak' => 'required|string|max:255',

            // Tambahkan validasi sesuai kebutuhan
        ]);

        // Simpan perubahan pada data karyawan
        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }

    public function daftar()
    {
        $karyawans = Karyawan::all();

        return view('karyawan.daftar', compact('karyawans'));
    }

}
