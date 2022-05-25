<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\StockController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents-menu', [DocumentController::class, 'menu'])->name('documents.menu');

Route::get('/documents-menu/documents/search', [DocumentController::class, 'search'])->name('documents.search');
Route::post('/documents-menu/documents/confirm', [DocumentController::class, 'confirm'])->name('documents.confirm');
Route::resource('/documents-menu/documents', DocumentController::class);

// Route::get('/menu/stocks', [StockController::class, 'menu'])->name('stocks.menu');
// Route::get('/stocks/search', [StockController::class, 'search'])->name('stocks.search');;
// Route::resource('stocks', StockController::class);
