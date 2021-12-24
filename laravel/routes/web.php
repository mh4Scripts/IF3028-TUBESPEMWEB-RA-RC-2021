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

Route::get('/c', 'App\Http\Controllers\LaporController@canvas')->name('canvas');
Route::get('c/mahasiswa', function () {
    return view('templates.canvas');
    
});

Route::get('/',                         'App\Http\Controllers\LaporController@home')->name('home');

Route::post('/',                        'App\Http\Controllers\LoginController@authenticate');

Route::get('/logged-in', 'App\Http\Controllers\LaporController@loggedIn')->name('LoggedInhome');




//FIX TAMPIL SEMUA LAPORAN DAN BERDASARKAN AASPEK
Route::get('/semua-laporan',              'App\Http\Controllers\LaporController@show')->name('show');
Route::get('/semua-laporan/{aspect}',       'App\Http\Controllers\LaporController@showAspect');

Route::get('/detail-laporan/{slugy}',    'App\Http\Controllers\LaporController@detail')->name('detail');

Route::get('check-email/{emailAddress}', 'App\Http\Controllers\RegisterController@isStoredEmail');
Route::get('check-uname/{userName}', 'App\Http\Controllers\RegisterController@isStoredUname');



Route::get('/profil-akun-lapor',              'App\Http\Controllers\LaporController@about')->name('profile');




Route::get('/daftar-akun',               'App\Http\Controllers\RegisterController@register')->name('register');
Route::post('/daftar-akun',               'App\Http\Controllers\RegisterController@store');







Route::get('/about-lapor',              'App\Http\Controllers\LaporController@about')->name('about');

Route::get('/users', 'AjaxController@index')->name('get');
Route::get('/getData/{id}','AjaxController@getData')->name('getbyID');
























Route::get('/laporan-baru', function () {
    return view('templates/create',[
        'title' => 'Laporan Baru'
    ]);
})->name('create');


Route::get('/update-laporan', function () {
    return view('templates/update', [
        'title' => 'Ubah Laporan'
    ]);
})->name('update');


// Route::get('/masuk', function () {
//     return view('templates/login');
// })->name('login');
