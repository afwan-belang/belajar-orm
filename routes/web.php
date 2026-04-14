<?php
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/karyawan/{karyawan_id}/proyek/tambah', [ProyekController::class, 'create'])->name('proyek.tambah');
Route::post('/karyawan/{karyawan_id}/proyek', [ProyekController::class, 'store'])->name('proyek.store');
Route::put('/proyek/{id}/status', [ProyekController::class, 'updateStatus'])->name('proyek.updateStatus');

Route::get('/', function () {
    return view('welcome');
});

// Route CRUD Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.create');
Route::get('/karyawan/tambah', [KaryawanController::class, 'show'])->name('karyawan.tambah');
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::get('/karyawan/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.delete');
