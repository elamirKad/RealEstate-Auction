<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotsController;

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

Route::get('/', [App\Http\Controllers\LotsController::class, 'main']);

Route::get('/offers', [App\Http\Controllers\LotsController::class , 'offers']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
