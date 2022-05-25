<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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


/*Route::get('/', function(){
    return view('welcome');
});*/

Route::get('/home', [HomeController::class, 'index'])->name('home');

/*会員メニュー*/
Route::get('users', [UserController::class, 'index'])->name('users.index');

/*新規会員登録画面の遷移先*/
Route::post('users/create', [UserController::class, 'post'])->name('users.post');


/*新規会員登録作成画面の表示*/
Route::get('users/create', [UserController::class, 'create'])->name('users.create');

/*確認画面の表示*/
Route::get('/create/confirm', [UserController::class, 'confirm'])->name("users.confirm");

/*確認画面からフォーム遷移先*/
Route::post('/create/confirm', [UserController::class, 'send'])->name('users.send');



/*完了（登録）アクション*/
Route::get('/create/thanks', [UserController::class, 'complete'])->name("users.complete");

/*新規会員登録アクション*/
Route::post('users', [UserController::class, 'store'])->name('users.store');

/*会員検索
Route::get('/', [UserController::class, 'index']);

/*会員詳細
Route::get('users/create', [UserController::class, 'show'])->name('users.show');;

/*会員更新
Route::patch('/', [UserController::class, 'update'])->name('users.update');;

/*退会
Route::delete('/', [UserController::class, 'destroy'])->name('users.destroy');;

/*
Route::resource('users', UserController::class);*/
