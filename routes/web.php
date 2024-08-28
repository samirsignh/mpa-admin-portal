<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

// ************************* dashboard controller *********************
Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');