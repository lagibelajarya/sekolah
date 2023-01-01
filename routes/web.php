<?php

use App\Http\Controllers\frontEndPageController;
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

Route::get('/', [frontEndPageController::class, 'home']);
Route::get('/about', [frontEndPageController::class, 'about']);
Route::get('/alumni', [frontEndPageController::class, 'alumni']);
Route::get('/ppdb', [frontEndPageController::class, 'ppdb']);
Route::get('/news', [frontEndPageController::class, 'news']);
