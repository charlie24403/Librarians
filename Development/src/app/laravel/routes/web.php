<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LendingController;

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

//貸出管理メニュー画面
Route::get('/lendings-menu',[LendingController::class, 'menu'])->name('lendings.menu');

// //新規貸出登録画面
Route::get('/lendings-menu/create',[LendingController::class, 'create'])->name('lendings.create');

//検索画面
Route::get('/lending-menu/search',[LendingController::class, 'search'])->name('lendings.search');

//新規貸出登録の確認画面
Route::post('/lendings-menu/create/confirm', [LendingController::class, 'confirm'])->name('lendings.confirm');

//新規貸出情報の送信
Route::post('/lendings-menu',[LendingController::class, 'store'])->name('lendings.store');

//検索結果一覧画面
Route::get('/lending-menu/search/index',[LendingController::class, 'index'])->name('lendings.index');

//貸出資料詳細画面
Route::get('/lendings-menu/search/index/show/{id}',[LendingController::class, 'show'])->name('lendings.show');

//情報削除
Route::delete('/lendings-menu/search/index/show/{id}',[LendingController::class, 'destroy'])->name('lendings.destroy');

//情報編集
Route::get('/lendings-menu/search/index/show/{id}/edit',[LendingController::class, 'edit'])->name('lendings.edit');

//情報更新
//情報編集
Route::patch('/lendings-menu/search/index/show/{id}/edit/update/',[LendingController::class, 'update'])->name('lendings.update');

//情報更新完了画面
Route::get('/lendings-menu/search/index/show/{id}/edit/thanks',[LendingController::class, 'complete'])->name('lendings.complete');

// //確認画面の表示
// Route::get('/reservations-menu/create/confirm',[ReservationController::class, 'create'])->name('lendings.create');

// //情報更新 menu以下リンク書き忘れずに
// Route::post('/reservations-menu/　',[ReservationController::class, 'send'])->name('lendings.send');
