<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SenjataController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Dasboard;

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
Route::get('/', [Dasboard::class,'index'])->name('index');
// Senjata
Route::get('/senjata/create',[SenjataController::class,'create'])->name('senjata.create')->middleware('login_auth');
Route::post('/senjata',[SenjataController::class,'store'])->name('senjata.store')->middleware('login_auth');
Route::get('/senjata',[SenjataController::class,'index'])->name('senjata.index')->middleware('login_auth');
Route::get('/senjata/{senjata}', [SenjataController::class,'show'])->name('senjata.show')->middleware('login_auth');
// Kendaraan
Route::get('/kendaraan/create',[KendaraanController::class,'create'])->name('kendaraan.create')->middleware('login_auth');
Route::post('/kendaraan',[KendaraanController::class,'store'])->name('kendaraan.store')->middleware('login_auth');
Route::get('/kendaraan',[KendaraanController::class,'index'])->name('kendaraan.index')->middleware('login_auth');
Route::get('/kendaraan/{kendaraan}', [KendaraanController::class,'show'])->name('kendaraan.show')->middleware('login_auth');
// Pinjam
Route::get('/pinjam/create',[PinjamController::class,'create'])->name('pinjam.create')->middleware('login_auth');
Route::post('/pinjam',[PinjamController::class,'store'])->name('pinjam.store')->middleware('login_auth');
Route::get('/pinjam',[PinjamController::class,'index'])->name('pinjam.index')->middleware('login_auth');
Route::get('/pinjam/{pinjam}', [PinjamController::class,'show'])->name('pinjam.show')->middleware('login_auth');
// Login
Route::get('/login', [AdminController::class,'index'])->name('login.index');
Route::get('/logout', [AdminController::class,'logout'])->name('login.logout');
Route::post('/login', [AdminController::class,'process'])->name('login.process');