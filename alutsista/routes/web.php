<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SenjataController;
use App\Http\Controllers\KendaraanController;

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
// Home

// Senjata
Route::get('/senjata/create',[SenjataController::class,'create'])->name('senjata.create');
Route::post('/senjata',[SenjataController::class,'store'])->name('senjata.store');
Route::get('/senjata',[SenjataController::class,'index'])->name('senjata.index');
Route::get('/senjata/{senjata}', [SenjataController::class,'show'])->name('senjata.show');
Route::get('/senjata/{senjata}/edit',[SenjataController::class,'edit'])->name('senjata.edit');
Route::patch('/senjata/{senjata}',[SenjataController::class,'update'])->name('senjata.update');
Route::delete('/senjata/{senjata}',[SenjataController::class,'destroy'])->name('senjata.destroy');
// Kendaraan
Route::get('/kendaraan/create',[KendaraanController::class,'create'])->name('kendaraan.create');
Route::post('/kendaraan',[KendaraanController::class,'store'])->name('kendaraan.store');
Route::get('/kendaraan',[KendaraanController::class,'index'])->name('kendaraan.index');
Route::get('/kendaraan/{kendaraan}', [KendaraanController::class,'show'])->name('kendaraan.show');
Route::get('/kendaraan/{kendaraan}/edit',[KendaraanController::class,'edit'])->name('kendaraan.edit');
Route::patch('/kendaraan/{kendaraan}',[KendaraanController::class,'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraan}',[KendaraanController::class,'destroy'])->name('kendaraan.destroy');