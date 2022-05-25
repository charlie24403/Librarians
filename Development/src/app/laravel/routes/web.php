<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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
// Route::resource('reservations', ReservationController::class);

//予約管理メニュー画面
Route::get('/reservations-menu',[ReservationController::class, 'menu'])->name('reservations.menu');
// Route::get('/show',[ReservationController::class, 'show']);

//検索画面
Route::get('/reservations-menu/search',[ReservationController::class, 'search'])->name('reservations.search');

//検索結果一覧画面
Route::get('/reservations-menu/search/index',[ReservationController::class, 'index'])->name('reservations.index');

//予約詳細画面
Route::get('/reservations-menu/search/index/show/{id}',[ReservationController::class, 'show'])->name('reservations.show');

// //新規予約登録画面
// Route::get('/reservations-menu/create',[ReservationController::class, 'create'])->name('reservations.create');

// //確認画面の表示
// Route::get('/reservations-menu/create/confirm',[ReservationController::class, 'create'])->name('reservations.create');

// //情報更新 menu以下リンク書き忘れずに
// Route::post('/reservations-menu/　',[ReservationController::class, 'send'])->name('reservations.send');

//情報削除
Route::delete('/reservations-menu/index/show{id}',[ReservationController::class, 'destroy'])->name('reservations.destroy');
