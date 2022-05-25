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

Route::get('/menu/documents', [DocumentController::class, 'menu'])->name('documents.menu');
Route::get('/menu/stocks', [DocumentController::class, 'menu'])->name('stocks.menu');

Route::get('/documents/search', [DocumentController::class, 'search'])->name('documents.search');;
Route::resource('documents', DocumentController::class);

Route::get('/stocks/search', [StockController::class, 'search'])->name('stocks.search');;
Route::resource('stocks', StockController::class);
