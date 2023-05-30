<?php

use App\Http\Controllers\BobotController;
use App\Http\Controllers\DataNilaiController;
use App\Http\Controllers\KeteranganController;
use App\Http\Controllers\KriteriaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/tabel', function () {
    return view('dashboard.tabel');
});


//keterangan
Route::resource('keterangan', KeteranganController::class);

//kriteria
Route::resource('kriteria', KriteriaController::class);

//bobot
Route::resource('bobot', BobotController::class);

//data nilai
Route::resource('dataNilai', DataNilaiController::class);