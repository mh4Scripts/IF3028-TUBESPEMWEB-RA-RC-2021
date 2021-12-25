<?php

use App\Http\Controllers\laporanController;
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
Route::get('/utama',[laporancontroller::class,'index']);
Route::post('/utama',[laporancontroller::class,'store']);
Route::get('/detail/{id}', [laporancontroller::class,'show']);
Route::get('/ubah/{id}', [laporancontroller::class,'edit']);
Route::post('/ubah/{id}', [laporancontroller::class,'update']);
Route::get('/utama/{id}/delete', [laporancontroller::class,'destroy']);
// Route::get('/utama', function () {
//     return view('utama',[
//         "title" => "Utama"
//     ]);
// });

Route::get('/AboutUs', function () {
    return view('AboutUs',[
        "title" => "About"
    ]    
    );
});

Route::get('/detail', function () {
    return view('detail',[
        "title" => "Detail"
    ]);
});

Route::get('/buat', function () {
    return view('buat',[
        "title" => "Buat"
    ]);
});
