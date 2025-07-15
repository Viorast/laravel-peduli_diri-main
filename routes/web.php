<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [PerjalananController::class, 'index'])->name('data')->name('dashboard');
//Datatable
Route::get('/dashboard/json', [PerjalananController::class, 'data'])->name('datatable');

Route::get('/tambah_data', [PerjalananController::class, 'showDataPage'])->name('tambah_data');
Route::post('/simpanPerjalanan', [PerjalananController::class, 'simpanPerjalanan']);
Route::get('/edit/{id}', [PerjalananController::class, 'editPerjalanan']);
Route::post('/update/{id}', [PerjalananController::class, 'update'])->name('update');
Route::get('/delete/{id}', [PerjalananController::class, 'delete'])->name('delete');


// REGISTRASI
Route::get('/register', [LoginController::class, 'halamanRegister']);
Route::post('/simpanRegister', [LoginController::class, 'simpanRegister']);

// LOGIN & LOGOUT
Route::get('/', [LoginController::class, 'index']);
Route::post('/simpanLogin', [LoginController::class, 'simpanLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

// search
Route::get('/cariPerjalanan', [PerjalananController::class, 'cariPerjalanan']);
