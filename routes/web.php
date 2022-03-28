<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard/mentor', function () {
    return view('pages.dashboard-mentor');
});

Route::get('/dashboard/member', function () {
    return view('pages.dashboard-member');
});

Route::get('/kampus/itb/list-mentor', function () {
    return view('pages.mentor.list-mentor');
});
Route::get('/kampus/itb/ahmad-fulan', function () {
    return view('pages.mentor.detail-mentor');
});
