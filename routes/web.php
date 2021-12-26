<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/buat_laporan', function () {
    return view('buat_laporan');
});

Route::get('/detail',function(){
    return view('detail');
});

Route::get('/',[laporanController::class,'index']);
Route::post('/tambah', [laporanController::class, 'buatlaporan'])->name('buatlaporan');
Route::get('/detail',[laporanController::class,'detail']);