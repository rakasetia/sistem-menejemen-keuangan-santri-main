<?php

use App\Http\Controllers\KeuanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keuangan-santri',[KeuanganController::class,'loadallsantri'])->name('index');
Route::get('/add/santri',[KeuanganController::class,'loadaddsantriform']);

Route::post('/add/santri',[KeuanganController::class,'addsantri'])->name('addsantri');

Route::get('/edit/{id}',[KeuanganController::class,'Editsantrifrom']);
Route::get('/delete/{id}',[KeuanganController::class,'Hapussantrifrom']);

Route::put('/edit/{id}',[KeuanganController::class,'Editsantri'])->name('editsantri');