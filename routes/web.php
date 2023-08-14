<?php

use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerStaffController;
use App\Http\Controllers\InOutForgetController;
use App\Http\Controllers\LeaveController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('users', UserController::class)->middleware('auth');
Route::resource('managerStaff',ManagerStaffController::class)->middleware('auth');
Route::resource('showVerifyEmailForm', VerificationController::class)->middleware('auth');

Route::resource('in_out_forgets', InOutForgetController::class)->middleware('auth');
Route::resource('leaves', LeaveController::class)->middleware('auth');
Route::get('/verify', [App\Http\Controllers\Auth\VerificationController::class, 'showVerifyEmailForm'])->name('auth.verify');