<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticeAndCircularController;

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
Route::middleware(['web'])->group(function () {
    Route::resource('users', UserController::class);
});

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

<<<<<<< Updated upstream

// ************* dashboard controller ******************
Route::get('admin/dashboard',[AdminDashboard::class, 'dashboard'])->name('dashboard')->middleware('user.auth');

// *************** user crud section ************
Route::get('user/list',[UserController::class, 'userList'])->name('userList')->middleware('user.auth');
Route::prefix('notice/')->group(function () {
    Route::get('list', [NoticeAndCircularController::class, 'notice_list'])->name('notice_list');
    Route::post('create', [NoticeAndCircularController::class, 'create_notice'])->name('create_notice')->middleware('user.auth');
});
=======
//*********************** user controller *****************/
Route::prefix('user/')->group(function () {
    Route::get('list', [UserController::class, 'user_list'])->name('user.list');
    Route::post('create', [UserController::class, 'create_user'])->name('user.create');
});
Route::get('/user/edit/{id}', [UserController::class, 'edit_user'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update_user'])->name('user.update');
Route::post('/user/delete/{id}', [UserController::class, 'delete_user'])->name('user.delete');
// ************************* dashboard controller *********************
Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

// ************************* dashboard controller *********************
Route::get('notice_circular',[NoticeAndCircularController::class,'create'])->name('notice_circular');
Route::resource('notices', NoticeAndCircularController::class);

// Route::resource('notices', NoticeAndCircularController::class);

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');
>>>>>>> Stashed changes
