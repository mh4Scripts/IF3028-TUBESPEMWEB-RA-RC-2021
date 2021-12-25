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

Route::get('/', [PostController::class, 'index']);

Route::get('/buat', function() {
    return view('input');
});

Route::get('/laporan/{id}', [PostController::class, 'show']);

Route::post('/tambah', [PostController::class, 'create']);

Route::post('/ubah', [PostController::class, 'update']);

Route::post('/hapus', [PostController::class, 'delete']);