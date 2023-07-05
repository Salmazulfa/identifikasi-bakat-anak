<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BakatController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\Rapor2Controller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiGapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NilaiCfsfController;
use App\Http\Controllers\NilaiBobotController;
use App\Http\Controllers\LevelPenilaianController;
use App\Http\Controllers\KompetensiDasarController;

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

// LOGIN, DASHBOARD & LOGOUT
Route::get('/', [UserController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/home', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
Route::get('/logout', [UserController::class, 'logout']);

// ADMIN - DATA SISWA
Route::get('/admin/dataSiswa', [SiswaController::class, 'dataSiswa'])->middleware('auth');
Route::get('/admin/tambahSiswa', [SiswaController::class, 'tambahSiswa'])->middleware('auth');
Route::post('/admin/saveSiswa', [UserController::class, 'saveUser'])->middleware('auth');
Route::get('/admin/editSiswa/{id}', [SiswaController::class, 'editSiswa'])->middleware('auth');
Route::post('/admin/updateSiswa', [SiswaController::class, 'updateSiswa'])->middleware('auth');
Route::delete('/admin/hapusSiswa/{id}', [SiswaController::class, 'hapusSiswa'])->middleware('auth');
Route::post('/admin/updatePass', [UserController::class, 'updatePass'])->middleware('auth');

// ADMIN - REQUIREMENT PENILAIAN
Route::get('/admin/kd', [KompetensiDasarController::class, 'kd'])->middleware('auth');
Route::post('/admin/saveKd', [KompetensiDasarController::class, 'saveKd'])->middleware('auth');
Route::post('/admin/updateKd/{id}', [KompetensiDasarController::class, 'updateKd'])->middleware('auth');
Route::delete('/admin/hapusKd/{id}', [KompetensiDasarController::class, 'hapusKd'])->middleware('auth');

Route::get('/admin/aspek', [KriteriaController::class, 'aspek'])->middleware('auth');
Route::post('/admin/saveAspek', [KriteriaController::class, 'saveAspek'])->middleware('auth');
Route::post('/admin/updateAspek/{id}', [KriteriaController::class, 'updateAspek'])->middleware('auth');
Route::delete('/admin/hapusAspek/{id}', [KriteriaController::class, 'hapusAspek'])->middleware('auth');

Route::get('/admin/level', [LevelPenilaianController::class, 'level'])->middleware('auth');
Route::post('/admin/saveLevel', [LevelPenilaianController::class, 'saveLevel'])->middleware('auth');
Route::post('/admin/updateLevel/{id}', [LevelPenilaianController::class, 'updateLevel'])->middleware('auth');
Route::delete('/admin/hapusLevel/{id}', [LevelPenilaianController::class, 'hapusLevel'])->middleware('auth');

// DATA BAKAT
Route::get('/bakat', [BakatController::class, 'dataBakat'])->middleware('auth');

// PENGISIAN RAPOR
Route::get('/admin/pm', [NilaiCfsfController::class, 'pm'])->middleware('auth');

Route::get('/rapor1/{id}', [RaporController::class, 'rapor1'])->middleware('auth');
Route::post('/aksinam', [RaporController::class, 'aksi_nam'])->middleware('auth');
// Route::post('/aksinam', [Rapor2Controller::class, 'aksi_nam'])->middleware('auth');

Route::get('/rapor2/{id}', [RaporController::class, 'rapor2'])->middleware('auth');
Route::post('/aksifm', [RaporController::class, 'aksi_fm'])->middleware('auth');
// Route::post('/aksifm', [Rapor2Controller::class, 'aksi_fm'])->middleware('auth');

Route::get('/rapor3/{id}', [RaporController::class, 'rapor3'])->middleware('auth');
Route::post('/aksik', [RaporController::class, 'aksi_k'])->middleware('auth');
// Route::post('/aksik', [Rapor2Controller::class, 'aksi_k'])->middleware('auth');

Route::get('/rapor4/{id}', [RaporController::class, 'rapor4'])->middleware('auth');
Route::post('/aksib', [RaporController::class, 'aksi_b'])->middleware('auth');
// Route::post('/aksib', [Rapor2Controller::class, 'aksi_b'])->middleware('auth');

Route::get('/rapor5/{id}', [RaporController::class, 'rapor5'])->middleware('auth');
Route::post('/aksise', [RaporController::class, 'aksi_se'])->middleware('auth');
// Route::post('/aksise', [Rapor2Controller::class, 'aksi_se'])->middleware('auth');

Route::get('/rapor6/{id}', [RaporController::class, 'rapor6'])->middleware('auth');
Route::post('/aksis', [RaporController::class, 'aksi_s'])->middleware('auth');
// Route::post('/aksis', [Rapor2Controller::class, 'aksi_s'])->middleware('auth');

// TAMPILAN PERHITUNGAN
Route::get('/hasil/{id}', [NilaiCfsfController::class, 'perhitungan'])->middleware('auth');

// PROFIL SISWA
Route::get('/profil/{id}', [SiswaController::class, 'profil'])->middleware('auth');
Route::post('/updateProfil', [SiswaController::class, 'updateProfil'])->middleware('auth');

Route::get('/coba', [Rapor2Controller::class, 'coba'])->middleware('auth');