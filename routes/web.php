<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homePage'])->name('homePage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
