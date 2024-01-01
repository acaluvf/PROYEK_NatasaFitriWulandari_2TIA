<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\RiwayatPenggajianController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\ProfilKaryawanController;
use App\Http\Controllers\StatusCutiUserController;
use App\Http\Controllers\DaftarCutiAdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template/dashboard');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/admin/home', 'AdminController@home')->name('admin.home');
    });

    Route::group(['middleware' => 'isUser'], function () {
        Route::get('/user/home', 'UserController@home')->name('user.home');
    });
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('template/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
route::get('template/home', [homeController::class, 'index'])->name('home');
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
// Daftar Karyawan
Route::get('/karyawan/daftar', [KaryawanController::class, 'daftar'])->name('karyawan.daftar');

// Detail Karyawan
Route::get('/karyawan/show', [KaryawanController::class, 'show'])->name('karyawan.show');

// Edit Karyawan
Route::get('/karyawan/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/update', [KaryawanController::class, 'update'])->name('karyawan.update');

// Hapus Karyawan
Route::delete('/karyawan/destroy', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::resource('/karyawan', KaryawanController::class);
Route::get('/karyawan/search', 'KaryawanController@search')->name('karyawan.search');

Route::get('/profil', [ProfilKaryawanController::class, 'index'])->name('profil.index');
Route::get('/profil/edit', [ProfilKaryawanController::class, 'edit'])->name('profil.edit');
Route::put('/profil/update', [ProfilKaryawanController::class, 'update'])->name('profil.update');

// Untuk User
Route::get('/user-status-cuti', [StatusCutiUserController::class, 'index'])->name('user_status_cuti');
Route::get('/user-status-cuti-form', [StatusCutiUserController::class, 'create'])->name('user_status_cuti_form.create');
Route::get('/user-status-cuti/create', [StatusCutiUserController::class, 'create'])->name('user_status_cuti.create');
Route::post('/user-status-cuti', [StatusCutiUserController::class, 'store'])->name('user_status_cuti.store');

// Untuk Admin
Route::get('/admin-daftar-cuti', [DaftarCutiAdminController::class, 'index'])->name('admin_daftar_cuti');
Route::get('/admin-daftar-cuti/setuju/{id}', [StatusCutiUserController::class, 'setuju'])->name('admin_daftar_cuti.setuju');
Route::get('/admin-daftar-cuti/reject/{id}', [StatusCutiUserController::class, 'tolak'])->name('admin_daftar_cuti.tolak');

Route::get('/evaluasi', [EvaluasiController::class, 'index'])->name('evaluasi.index');
Route::get('/evaluasi/create', [EvaluasiController::class, 'create'])->name('evaluasi.create');
Route::post('/evaluasi/store', [EvaluasiController::class, 'store'])->name('evaluasi.store');

Route::get('/gaji/tambah', [GajiController::class, 'tambahJadwalGajiForm'])->name('gaji.tambah');
Route::post('/gaji/simpan', [GajiController::class, 'simpanJadwalGaji'])->name('gaji.simpan');
Route::get('/gaji/riwayat', [GajiController::class, 'riwayatGaji'])->name('gaji.riwayat');
Route::get('/gaji/ambil/{id}', [GajiController::class, 'ambilGaji'])->name('gaji.ambil');
Route::get('/gaji/informasi', [GajiController::class, 'informasiGaji'])->name('gaji.informasi');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
