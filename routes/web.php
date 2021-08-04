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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('home');
Route::get('/deletevac/{id}', [App\Http\Controllers\HomeController::class, 'deletevac'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('test');
Route::post('/home/vac', [App\Http\Controllers\HomeController::class, 'index'])->name('vac');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'changepassword'])->name('update');
Route::post('/profile/editprofile', [App\Http\Controllers\ProfileController::class, 'storeprof'])->name('editprofile');
Route::get('/vaccaine', [App\Http\Controllers\VaccaineController::class, 'vaccaine'])->name('vaccaine');
Route::post('/vaccaine', [App\Http\Controllers\VaccaineController::class, 'storevac'])->name('storevac');
Route::get('/testing', [App\Http\Controllers\TestingController::class, 'testing'])->name('testing');
Route::post('/testing', [App\Http\Controllers\TestingController::class, 'storetest'])->name('storetest');
// Route::get('/forget-password', 'ForgotPasswordController@getEmail');
// Route::post('/forget-password', 'ForgotPasswordController@postEmail');

// Password Reset Routes...
// Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
// /* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');