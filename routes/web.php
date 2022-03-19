<?php

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
    return view('home');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

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
