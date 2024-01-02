<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function index()
    {
        $evaluasis = Evaluasi::all();
        return view('evaluasi.index', compact('evaluasis'));
    }

    public function create()
    {
        return view('evaluasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'catatan' => 'required',
            'rating' => 'required|in:bagus,cukup,buruk',
        ]);

        Evaluasi::create($request->all());

        return redirect()->route('evaluasi.index')->with('success', 'Evaluasi berhasil disimpan');
    }
}
