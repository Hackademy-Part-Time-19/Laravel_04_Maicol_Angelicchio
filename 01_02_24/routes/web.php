<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'homepage'])->name('home');

Route::get('/chi-sono', [ContactController::class, 'visualizzaPagina'])->name('contatti');

Route::post('/chi-sono', [ContactController::class, 'elaboraDati'])->name('contatti');

Route::get('/articoli', [ArticleController::class, 'articoli'])->name('articoli');

Route::get('/articolo/{id}', [ArticleController::class, 'articoloSingolo'])->name('articolo');