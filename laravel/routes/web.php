<?php

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
// Route::get('/',                     [LaporController::class, 'home'])->name('home');
Route::get('/',                     'App\Http\Controllers\LaporController@home')->name('home');

Route::get('/about', function () {
    return view('templates/about');
})->name('about');


Route::get('/sudahmasuk', function () {
    return view('templates/home');
})->name('LoggedInhome');


Route::get('/daftar', function () {
    return view('templates/register');
})->name('register');

Route::get('/detail', function () {
    return view('templates/detail');
})->name('detail');

Route::get('/laporan-baru', function () {
    return view('templates/create');
})->name('create');

Route::get('/semua-laporan', function () {
    return view('templates/show');
})->name('show');

Route::get('/update-laporan', function () {
    return view('templates/update');
})->name('update');

Route::get('/c', function () {
    return view('templates/canvas');
})->name('canvas');

// Route::get('/masuk', function () {
//     return view('templates/login');
// })->name('login');
