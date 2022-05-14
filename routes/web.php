<?php

use App\Http\Controllers\AdminHistoryController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('user.home', [
        'title' => 'Home',
        'nama' => 'Haris Muzakki'
    ]);
})->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('history', HistoryController::class)->middleware('auth');

Route::resource('users', AdminUsersController::class)->middleware('admin');

Route::resource('histories', AdminHistoryController::class)->middleware('admin');
