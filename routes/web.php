<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
use App\Http\Controllers\userController;
use App\Http\Controllers\transaksiController;

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
    return view('auth.login');
});


Route::resource('barang',crudController::class);
Route::resource('user',userController::class);
Route::resource('transaksi',transaksiController::class);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
