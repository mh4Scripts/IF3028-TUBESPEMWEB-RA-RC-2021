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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/detail', function () {
    return view('detail');
});


Route::get('/', [App\Http\Controllers\LaporanController::class,'index']);
Route::get('/create', [App\Http\Controllers\LaporanController::class, 'create'])->name('create');
Route::get('/detail/{id}', [App\Http\Controllers\LaporanController::class, 'detail'])->name('detail');
Route::get('/edit/{id}', [App\Http\Controllers\LaporanController::class, 'edit'])->name('editLaporan');
Route::put('/update/{id}', [App\Http\Controllers\LaporanController::class, 'update']);
Route::post('/create', [App\Http\Controllers\LaporanController::class,'store']);
Route::get('/delete/{id}', [App\Http\Controllers\LaporanController::class, 'destroy']);
Route::get('/search', [App\Http\Controllers\LaporanController::class,'search']);