<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\masters\ArbitrationController;
use App\Http\Controllers\masters\SarodController;
use App\Http\Controllers\masters\UserTypeController;
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

// *************** user crud section ************
Route::middleware('user.auth')->group(function () {
    Route::prefix('user/')->group(function () {
        Route::get('list', [UserController::class, 'userList'])->name('userList');
        Route::post('create_user', [UserController::class, 'createUser'])->name('createUser');
        Route::get('edit_user/{id}', [UserController::class, 'editUser'])->name('editUser');
        Route::post('update_user', [UserController::class, 'updateUser'])->name('updateUser');
        Route::get('delete_user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    });
});

// ******************** master scetion area role ******************

// ************* dashboard controller ******************
Route::get('admin/dashboard',[AdminDashboard::class, 'dashboard'])->name('dashboard')->middleware('user.auth');

// ************************* notice controller *********************
Route::get('notice_circular',[NoticeAndCircularController::class,'create'])->name('notice_circular');
Route::resource('notices', NoticeAndCircularController::class);

// Route::resource('notices', NoticeAndCircularController::class);

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');

// ******************** master scetion area ******************
Route::middleware('user.auth')->group(function(){
    Route::prefix('master/')->group(function () {
        Route::get('role_list', [UserTypeController::class, 'roleList'])->name('roleList');
        Route::post('create_role', [UserTypeController::class, 'craeteRole'])->name('craeteRole');
        Route::get('edit_role/{id}', [UserTypeController::class, 'editRole'])->name('editRole');
        Route::post('update_role', [UserTypeController::class, 'updateRole'])->name('updateRole');
        Route::get('delte_role/{id}', [UserTypeController::class, 'deleteRole'])->name('deleteRole');
    });
});

// ****************** sarod master area *************
Route::middleware('user.auth')->group(function() {
    Route::prefix('master/')->group(function () {
        Route::get('sarod_list', [SarodController::class, 'sarodList'])->name('sarodList');
        Route::post('upload_file', [SarodController::class, 'uploadSarodFile'])->name('uploadSarodFile');
        Route::get('edit_sarod/{id}', [SarodController::class, 'editSarod'])->name('editSarod');
        Route::post('update_sarod', [SarodController::class, 'updateSarod'])->name('updateSarod');
        Route::get('delete_sarod/{id}', [SarodController::class, 'deleteSarod'])->name('deleteSarod');
    });
});

// ****************** international arbitration master area *************
Route::middleware('user.auth')->group(function() {
    Route::prefix('master/')->group(function() {
        Route::get('list',[ArbitrationController::class, 'arbitrationList'])->name('arbitrationList');
        Route::post('upload_arbitration',[ArbitrationController::class, 'uploadArbitration'])->name('uploadArbitration');
        Route::get('edit_arbitration/{id}',[ArbitrationController::class, 'editArbitration'])->name('editArbitration');
        Route::post('update_arbitartion',[ArbitrationController::class, 'updateArbitration'])->name('updateArbitration');
        Route::get('delete_arbitration/{id}',[ArbitrationController::class, 'deleteArbitration'])->name('deleteArbitration');
    });
});