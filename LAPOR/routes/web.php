<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something greatssssssssssssssssssssss
|
*/

Route::get('/', [postController::class, 'index'])->name('index');
Route::get('/create-post', [postController::class, 'create'])->name('create');
Route::post('/create', [postController::class, 'store'])->name('posts');
Route::get('/post/{id}', [postController::class, 'show'])->name('show');
Route::post('/delete/{id}', [postController::class, 'destroy'])->name('delete');
