<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\DestinasiController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/lokasi', [LokasiController::class, 'list']);
Route::get('/destinasi', [DestinasiController::class, 'list']);
Route::get('/lokasi/{id}', [DestinasiController::class, 'list_lokasi']);
Route::get('/destinasi/{id}', [DestinasiController::class, 'detail']);