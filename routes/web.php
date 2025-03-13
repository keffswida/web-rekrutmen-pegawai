<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\UserAdmController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\KualifikasiController;
use App\Http\Controllers\KeterampilanController;
use App\Http\Controllers\auth\user\ApplyController;
use App\Http\Controllers\auth\user\LoginController;
use App\Http\Controllers\auth\user\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LamaranController;

// Dashboard
Route::resource('admin', DashboardController::class);

// Lowongan View
Route::resource('lowongan', LowonganController::class);
Route::get('/get-posisi-by-departemen', [LowonganController::class, 'getPosisiByDepartemen']);

// Pelamar View
Route::resource('pelamar', PelamarController::class);
Route::get('get-data-pelamar', [PelamarController::class, 'getDataPelamar'])->name('pelamar.data');
Route::resource('sertifikat', SertifikatController::class);
Route::resource('pendidikan', PendidikanController::class);
Route::get('get-pendidikan-data', [PelamarController::class, 'getPendidikan'])->name('pendidikan.data');
Route::resource('pengalaman', PengalamanController::class);
Route::resource('keterampilan', KeterampilanController::class);
Route::resource('files', FilesController::class);

// Master Data View
Route::resource('/data/posisi', PosisiController::class);
Route::resource('/data/departemen', DepartemenController::class)->parameters(['departemen' => 'departemen'])->except(['show']);
Route::get('/data/departemen/get-depart', [DepartemenController::class, 'getDepartemen'])->name('departemen.data');
Route::resource('/data/useradm', UserAdmController::class);

// Report View
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::post('/reports/filter', [ReportController::class, 'filter'])->name('reports.filter');
Route::get('/reports/export', [ReportController::class, 'exportPDF'])->name('reports.exportPDF');

// Auth
Route::view('/auth/login', 'admin.auth.login');
Route::view('/auth/register', 'admin.auth.register');

Route::resource('career', KarirController::class);

Route::get('', function () {
    return view('user.home');
})->name('home');

Route::get('about', function () {
    return view('user.about-us');
})->name('about');

Route::get('/profile', [LamaranController::class, 'index'])->name('profile');
Route::get('/profile/{id}', [LamaranController::class, 'getDetail']);

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('registrasi.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.process');
Route::get('/apply/{slug_uuid}', [ApplyController::class, 'apply'])->name('apply');
Route::post('/apply', [ApplyController::class, 'processApply'])->name('apply.process');
