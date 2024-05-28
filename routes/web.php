<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

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
Route::get('/edit/{transaksi}', [TransaksiController::class,'edit'])->name('edit_transaksi');
Route::put('/update/{transaksi}', [TransaksiController::class,'update'])->name('transaksi_update');
