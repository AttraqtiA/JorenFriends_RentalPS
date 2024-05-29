<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/create', [TransaksiController::class,'create'])->name('create_transaksi');
Route::get('/store', [TransaksiController::class,'store'])->name('store_transaksi');
Route::get('/edit/{transaksi}', [TransaksiController::class,'edit'])->name('edit_transaksi');
Route::put('/update/{transaksi}', [TransaksiController::class,'update'])->name('transaksi_update');
Route::get('/', [TransaksiController::class,'read'])->middleware('auth')->name('list_transaksi');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

