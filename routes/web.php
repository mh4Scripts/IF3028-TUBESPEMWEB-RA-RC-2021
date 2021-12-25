<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('/');

Route::get('/cari/{search_text}', [PostController::class, 'search']);

Route::get('/buat', function() {
    return view('input');
});

Route::get('/laporan/{id}', [PostController::class, 'show'])->name('laporan');

Route::post('/tambah', [PostController::class, 'create'])->name('tambah');

Route::get('/perbarui/{id}', [PostController::class, 'renew'])->name('perbarui');

Route::post('/ubah', [PostController::class, 'update'])->name('ubah');

Route::post('/hapus', [PostController::class, 'delete'])->name('delete');