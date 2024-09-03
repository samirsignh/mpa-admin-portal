<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Auth\LoginController;
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
    return view('user_login');
});

// ****************** login controller ********************
Route::post('user/login', [LoginController::class, 'login'])->name('login');
Route::get('user/verify_otp', [LoginController::class, 'otpVerify'])->name('otpVerify')->middleware('user.auth');
Route::post('otp/validate', [LoginController::class, 'validateUserOtp'])->name('validateUserOtp');
Route::post('user/resend-otp',[LoginController::class, 'resendOtp'])->name('resendOtp');
Route::get('user/forget_password',[LoginController::class,'forgetPassword'])->name('forgetPassword');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


// ************* dashboard controller ******************
Route::get('admin/dashboard',[AdminDashboard::class, 'dashboard'])->name('dashboard')->middleware('user.auth');

// *************** user crud section ************
Route::get('user/list',[UserController::class, 'userList'])->name('userList')->middleware('user.auth');