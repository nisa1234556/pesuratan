<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KepalaSuratController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return redirect()->route('kepala_surat.index');
});

Route::resource('users', UserController::class);
Route::resource('kepala_surat', KepalaSuratController::class);
Route::resource('surat_keluar', SuratKeluarController::class);
