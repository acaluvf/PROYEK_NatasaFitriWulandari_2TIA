<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        // Tambahkan logika untuk mengambil data untuk dashboard
        return view('template/dashboard'); // Anggap Anda memiliki view bernama 'index.blade.php' di direktori 'resources/views/dashboard'
    }
}
