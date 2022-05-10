<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Models\History;

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
    return view('home', [
        'title' => 'Home',
        'nama' => 'Haris Muzakki'
    ]);
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/history', [HistoryController::class, 'index']);

Route::get('/add', function () {
    return view('add', [
        'title' => 'Tambah Data Perjalanan'
    ]);
});

Route::get('/login', function () {
    return view('auth.login', [
        'title' => 'Login'
    ]);
});

Route::get('/register', function () {
    return view('auth.register', [
        'title' => 'Register'
    ]);
});
