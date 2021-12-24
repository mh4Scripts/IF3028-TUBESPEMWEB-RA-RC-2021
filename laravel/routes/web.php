<?php

use Illuminate\Support\Facades\Route;



// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------ HOME -------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get('/',                             'App\Http\Controllers\LaporController@home'             )->name('home');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------ LOGIN ------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::post('/',                            'App\Http\Controllers\LoginController@authenticate'     )->middleware('guest');
Route::post('/logout',                      'App\Http\Controllers\LoginController@logout'           )->middleware('auth') ->name('logout');
Route::get ('/loginRequired',               'App\Http\Controllers\LoginController@loginRequired'    )                     ->name('loginRequired');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------- REGISTRASI ---------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get ('/daftar-akun',                 'App\Http\Controllers\RegisterController@register'      )->middleware('guest')->name('register');
Route::get ('check-email/{emailAddress}',   'App\Http\Controllers\RegisterController@isStoredEmail' )->middleware('guest');
Route::get ('check-uname/{userName}',       'App\Http\Controllers\RegisterController@isStoredUname' )->middleware('guest');
Route::post('/daftar-akun',                 'App\Http\Controllers\RegisterController@store'         )->middleware('guest');


// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// -------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------- TAMPIL SEMUA DATA, BERDASARKAN ASPEK, DAN TAMPIL DETAIL -----------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::get('/semua-laporan',                'App\Http\Controllers\LaporController@show'             )->middleware('auth') ->name('show');
Route::get('/semua-laporan/{aspect}',       'App\Http\Controllers\LaporController@showAspect'       )->middleware('auth');
Route::get('/detail-laporan/{slugy}',       'App\Http\Controllers\LaporController@detail'           )->middleware('auth') ->name('detail');





Route::get ('/about-lapor',                 'App\Http\Controllers\LaporController@about'            )->name('about');

























Route::get('/laporan-baru', function () {
    return view('templates/create',[
        'title' => 'Laporan Baru'
    ]);
})->middleware('auth')->name('create');


Route::get('/update-laporan', function () {
    return view('templates/update', [
        'title' => 'Ubah Laporan'
    ]);
})->name('update');


// Route::get('/masuk', function () {
//     return view('templates/login');
// })->name('login');
