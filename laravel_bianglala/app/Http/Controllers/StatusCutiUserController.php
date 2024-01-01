<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusCuti;

class StatusCutiUserController extends Controller
{
    public function index()
    {
        $statusCutis = StatusCuti::all();
        return view('user_status_cuti', compact('statusCutis'));
    }

    public function create()
    {
        return view('user_status_cuti_form');
    }

    public function store(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'alasan' => 'required',
        ]);

        // Buat status cuti baru
        StatusCuti::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'alasan' => $request->alasan,
            'status' => "Pending",
        ]);

        return redirect()->route('user_status_cuti')->with('success', 'Pengajuan cuti berhasil disimpan.');
    }

    public function setuju($id)
    {
        $statusCuti = StatusCuti::findOrFail($id);

        $statusCuti->update([
            'status' => "Approved",
        ]);

        return redirect()->route('user_status_cuti')->with('success', 'Pengajuan cuti berhasil diterima.');
    }

    public function tolak($id)
    {
        $statusCuti = StatusCuti::findOrFail($id);

        $statusCuti->update([
            'status' => "Rejected",
        ]);

        return redirect()->route('user_status_cuti')->with('success', 'Pengajuan cuti berhasil diterima.');
    }
}
