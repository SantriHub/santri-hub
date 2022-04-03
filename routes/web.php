<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\StateController;
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

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


// Auth::routes();


/**
 * Mentor
 */
Route::get('/kampus/itb/list-mentor', function () {
    return view('pages.mentor.list-mentor');
});
Route::get('/kampus/itb/ahmad-fulan', function () {
    return view('pages.mentor.detail-mentor');
});

// Route::get('/dashboard/mentor', function () {
//     return view('pages.mentor.dashboard-mentor');
// })->middleware(['auth', 'mentor']);


/**
 * Member
 */

// Route::get('/dashboard/member', function () {
//     return view('pages.member.dashboard-member');
// })->middleware(['auth', 'member']);

/**
 * Admin
 */


// Route::get('/dashboard/admin', function () {
//     return view('pages.admin.dashboard');
// });

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('countries', CountryController::class);
        Route::resource('states', StateController::class);
        Route::resource('cities', CityController::class);
        Route::resource('colleges', CollegeController::class);
        Route::resource('mentors', MentorController::class);
    });

// Route::prefix('countries')
//     ->namespace('Admin')
//     ->group(function () {
//         Route::get('/', [CountryController::class, 'index'])->name('countries');
//     });

// Route::get('/states', function () {
//     return view('pages.admin.states.index');
// });


// Route::get('/cities', function () {
//     return view('pages.admin.cities.index');
// });

// Route::get('/colleges', function () {
//     return view('pages.admin.colleges.index');
// });
