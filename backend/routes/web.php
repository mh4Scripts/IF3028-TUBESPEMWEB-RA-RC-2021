<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
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

Route::get('/', [LaporanController::class, 'index']);
Route::get('/create', [LaporanController::class, 'create']);
Route::post('/store', [LaporanController::class, 'store']);

Route::get('/search', function () {
    return view('search');
});

Route::get('/tentang', function () {
    return view('tentanglapor');
});