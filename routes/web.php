<?php

use App\Http\Controllers\frontEndPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [frontEndPageController::class, 'home'])->name('home');
Route::get('/about', [frontEndPageController::class, 'about'])->name('about');
Route::get('/alumni', [frontEndPageController::class, 'alumni'])->name('alumni');
Route::get('/ppdb', [frontEndPageController::class, 'ppdb'])->name('ppdb');
Route::get('/news', [frontEndPageController::class, 'news'])->name('news');
Route::get('/detail-news', [frontEndPageController::class, 'detailNews'])->name('detailNews');
