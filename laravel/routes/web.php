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

Route::get('/', function () {
    return view('templates/index');
})->name('home');

Route::get('/sudahmasuk', function () {
    return view('templates/home');
})->name('LoggedInhome');

Route::get('/about', function () {
    return view('templates/about');
})->name('about');

Route::get('/daftar', function () {
    return view('templates/register');
})->name('register');

Route::get('/c', function () {
    return view('templates/canvas');
})->name('canvas');

// Route::get('/masuk', function () {
//     return view('templates/login');
// })->name('login');
