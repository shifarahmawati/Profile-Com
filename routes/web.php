<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeLoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Pegawai2Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');



// Route untuk halaman login dan register
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/register', fn() => view('register'))->name('register');
Route::post('/register', RegisterController::class)->name('register.submit');
Route::post('/login', [LoginController::class, '__invoke'])->name('login.submit');
Route::get('/logout', [LogoutController::class, '__invoke'])->name('logout');

// Route untuk halaman Home Login
Route::get('/homelogin', [HomeLoginController::class, 'index'])->name('homelogin');

// Route untuk halaman Contac
Route::get('/contac', [ContacController::class, 'index'])->name('contac');
// Route untuk halaman ContacForm
Route::post('/contac', [ContactFormController::class, 'store'])->name('contac.store');

// Route untuk halaman Pegawai
Route::get('/pegawai2', [Pegawai2Controller::class, 'index'])->name('pegawai');
// Route untuk halaman About
Route::get('/about', [AboutController::class, 'index'])->name('about');


// Route untuk halaman karyawan (CRUD)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PegawaiController::class, 'index'])->name('dashboard');
    
//Route Admin Absensi
    Route::get('/absensi', [AbsensiController::class, 'absensi']);
    Route::get('/datakaryawan', [DataKaryawanController::class, 'index'])->name('datakaryawan');
    // Rute CRUD Karyawan
    Route::get('/create', [PegawaiController::class, 'create'])->name('create');
    Route::post('/karyawan/save', [PegawaiController::class, 'store'])->name('karyawan.save');
   // Rute untuk menampilkan detail karyawan (SHOW)
   Route::get('/karyawan/{id}', [PegawaiController::class, 'show'])->name('show');
// Rute untuk menampilkan form edit karyawan (EDIT)
   Route::get('/karyawan/{id}/edit', [PegawaiController::class, 'edit'])->name('edit');
// Rute untuk memperbarui data karyawan (UPDATE)
   Route::put('/karyawan/{id}', [PegawaiController::class, 'update'])->name('karyawan.update');
// Rute untuk menghapus data karyawan (DESTROY)
   Route::delete('/karyawan/{id}', [PegawaiController::class, 'destroy'])->name('karyawan.destroy');
     Route::get('/user', function (Request $request) {
        return $request->user();
     });

     Route::middleware(['auth'])->group(function () {
      Route::get('/dashboarduser', [DashboardUserController::class, 'index'])->name('dashboarduser');
});
});


