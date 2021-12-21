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
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [postController::class, 'index'])->name('index');
Route::get('/create-post', [postController::class, 'create'])->name('create');
Route::post('/create-post', [postController::class, 'store'])->name('store');

