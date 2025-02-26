<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\UserAdmController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\KeterampilanController;
use App\Http\Controllers\auth\user\LoginController;
use App\Http\Controllers\auth\user\RegisterController;

// Dashboard
Route::view('/admin', 'admin.dashboard.dashboard');

// Lowongan View
Route::resource('lowongan', LowonganController::class);
Route::get('/get-posisi-by-departemen', [LowonganController::class, 'getPosisiByDepartemen']);
// Route::get('/filter-lowongan', [LowonganController::class, 'filtering']);

// Pelamar View
Route::resource('pelamar', PelamarController::class);
Route::get('get-data-pelamar', [PelamarController::class, 'getDataPelamar'])->name('pelamar.data');
Route::resource('sertifikat', SertifikatController::class);
Route::resource('pendidikan', PendidikanController::class);
Route::resource('pengalaman', PengalamanController::class);
Route::resource('keterampilan', KeterampilanController::class);
Route::resource('files', FilesController::class);

// Master Data View
Route::resource('/data/posisi', PosisiController::class);
Route::resource('/data/departemen', DepartemenController::class)->parameters(['departemen' => 'departemen']); // singular form route::resource
// Route::resource('/data/kualifikasi', KualifikasiController::class);
Route::resource('/data/useradm', UserAdmController::class);

// Auth
Route::view('/auth/login', 'admin.auth.login');
Route::view('/auth/register', 'admin.auth.register');

// Route::get('/career', [KarirController::class, 'index'])->name('career');
// Route::get('/career/detail/{$id}', [KarirController::class, 'show'])->name('career.detail');

Route::resource('career', KarirController::class);

// Route::view('/', 'components.layout.user-default');
// Route::get('/', function () {
//     return response()->json([
//         'authenticated' => Auth::guard('pelamar')->check(),
//         'user' => Auth::guard('pelamar')->user(),
//     ]);
// });
Route::view('/', 'user.home')->name('home');

// Route::view('/career', 'user.karir');
// Route::view('/career/detail', 'user.detail');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::get('/register', [RegisterController::class, 'index'])->name('registrasi.index');
// Route::post('/register', [RegisterController::class, 'register'])->name('register');
// Route::post('/register/process/{section}', [RegisterController::class, 'processSection'])->name('register.process');
Route::post('/register/process', [RegisterController::class, 'processRegistration'])->name('register.process');
