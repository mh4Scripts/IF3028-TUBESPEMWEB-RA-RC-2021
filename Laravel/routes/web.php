<?php

use App\Http\Controllers\LaporController;
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
    return view('index');
});

Route::get('/lapor', function () {
    return view('lapor');
});

Route::get('/preview', function () {
    return view('preview');
});


// Route::post('/lapor', 'LaporController@store');
Route::get('/', [LaporController::class,'index']);
Route::post('/lapor', [LaporController::class,'store']);
Route::get('/preview/{id}', [LaporController::class,'show']);
Route::get('/delete/{id}', [LaporController::class,'destroy']);
Route::get('/search', [LaporController::class,'search']);
