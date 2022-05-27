<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

/*
|--------------------------------------------------------------------------
| ココから会員登録
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

/*会員メニュー*/
Route::get('/users', [UserController::class, 'menu'])->name('users.menu');

/*新規会員登録画面の遷移先*/
Route::post('/users/create', [UserController::class, 'post'])->name('users.post');

/*新規会員登録作成画面の表示*/
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

/*確認画面の表示*/
Route::get('/users/create/confirm', [UserController::class, 'confirm'])->name("users.confirm");

/*確認画面からフォーム遷移先*/
Route::post('/users/create/confirm', [UserController::class, 'send'])->name('users.send');

/*完了（登録）アクション*/
Route::get('/users/create/confirm/thanks', [UserController::class, 'complete'])->name("users.complete");


/*
|--------------------------------------------------------------------------
| ココから会員検索
|--------------------------------------------------------------------------
*/

/*会員検索画面への遷移*/
Route::get('/users/search', [UserController::class, 'search'])->name('users.search');

/*会員情報一覧画面への遷移*/
Route::get('/users/search/index', [UserController::class, 'index'])->name("users.index");

/*会員詳細画面への遷移*/
Route::get('/users/search/index/{id}', [UserController::class, 'show'])->name('users.show');

/*
|--------------------------------------------------------------------------
| ココから会員情報更新
|--------------------------------------------------------------------------
*/

/*会員情報更新の作成画面の表示*/
Route::get('/users/search/index/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

/*変更アクション*/
Route::patch('/users/search/index/{id}/edit/update/', [UserController::class, 'update'])->name("users.update");

/*
|--------------------------------------------------------------------------
| ココから会員情報削除
|--------------------------------------------------------------------------
*/
/*退会*/
Route::delete('/users/search/index/{id}', [UserController::class, 'destroy'])->name('users.destroy');;

/*
Route::resource('users', UserController::class);*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents-menu', [DocumentController::class, 'menu'])->name('documents.menu');

Route::get('/documents-menu/documents/search', [DocumentController::class, 'search'])->name('documents.search');
Route::post('/documents-menu/documents/confirm', [DocumentController::class, 'confirm'])->name('documents.confirm');
Route::resource('/documents-menu/documents', DocumentController::class);


Route::get('/stocks-menu', [StockController::class, 'menu'])->name('stocks.menu');

Route::get('/stocks-menu/stocks/search', [StockController::class, 'search'])->name('stocks.search');
Route::post('/stocks-menu/stocks/confirm', [StockController::class, 'confirm'])->name('stocks.confirm');
Route::resource('/stocks-menu/stocks', StockController::class);
Route::patch('/stocks-menu/stocks/{id}/waste', [StockController::class, 'waste'])->name('stocks.waste');
