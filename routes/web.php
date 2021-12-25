<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\post;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Session\Store;

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

#route untuk tampil di home
Route::get('/', [PostController::class, 'index'])->name('main');

#route input laporan
Route::get('/create', [PostController::class, 'create'])->name('create');

#route input data ke database
Route::post('/store', [PostController::class, 'store'])->name('store');

#route ke detail laporan
Route::get('/show/{id}', [PostController::class, 'show'])->name('show');

