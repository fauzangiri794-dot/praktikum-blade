<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', [MahasiswaController::class, 'profil'])->name('mahasiswa.profil');

Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])->name('mahasiswa.daftar');

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');

//Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');

Route::get('/jurusan/create',[JurusanController::class,'create'])
->name('jurusan.create');

Route::get('/jurusan',[JurusanController::class,'index'])
->name('jurusan.index');

Route::post('/jurusan',[JurusanController::class,'store'])
->name('jurusan.store');

Route::get('/jurusan/{id}', [JurusanController::class, 'show'])
->name('jurusan.show');

//rute matakuliah

Route::get('/matakuliah', [MataKuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah', [MataKuliahController::class, 'store'])
    ->name('matakuliah.store');

Route::get('/matakuliah/{id}', [MataKuliahController::class, 'show'])
    ->name('matakuliah.show');


