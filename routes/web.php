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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/edit/{transaksi}', [TransaksiController::class,'edit'])->name('edit_transaksi');
Route::put('/update/{transaksi}', [TransaksiController::class,'update'])->name('transaksi_update');
Route::get('/list_transaksi', [TransaksiController::class,'read'])->name('list_transaksi');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
