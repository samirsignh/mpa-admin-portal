<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
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

// ***************** login controller *************************
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('verify_otp',[LoginController::class,'verify_otp'])->name('verify_otp');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

//*********************** user controller *****************/
Route::prefix('user/')->group(function () {
    Route::get('list', [UserController::class, 'user_list'])->name('user.list');
    Route::post('create', [UserController::class, 'create_user'])->name('user.create');
});

// ************************* dashboard controller *********************
Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
