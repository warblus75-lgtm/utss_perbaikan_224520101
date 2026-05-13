<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

Route::get('/', function () {
    return redirect('/kendaraan');
});

Route::get('/kendaraan', [KendaraanController::class, 'index']);

Route::get('/kendaraan/create', [KendaraanController::class, 'create']);

Route::post('/kendaraan/store', [KendaraanController::class, 'store']);

Route::delete('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy']);