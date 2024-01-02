<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusCuti;

class DaftarCutiAdminController extends Controller
{
    public function index()
    {
        $statusCutis = StatusCuti::all();
        return view('admin_daftar_cuti', compact('statusCutis'));
    }

    public function approve(StatusCuti $statusCuti)
    {
        $statusCuti->update(['status' => 'approved']);
        return redirect()->back()->with('success', 'Status cuti disetujui.');
    }

    public function reject(StatusCuti $statusCuti)
    {
        $statusCuti->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Status cuti ditolak.');
    }
}
