<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
