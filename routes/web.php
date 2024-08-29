<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return view('login_view');
});

// Route::get('home_page', function () {
//     return view('dashboard');
// })->name('home_page');

// ***************** login controller *************************
Route::get('login',[LoginController::class, 'login'])->name('login');
Route::get('verify_otp',[LoginController::class, 'verify_otp'])->name('verify_otp');

// ************************* dashboard controller *********************
Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

//*********************** user controller *****************/
Route::get('user_view',[UserController::class, 'user_list'])->name('user_view');
