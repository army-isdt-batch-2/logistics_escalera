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
Route::group(['middleware' => 'user'], function(){

    Route::get('/', [
        App\Http\Controllers\AuthController::class,
        'index'
    ])->name('app');
    Route::get('/logout', [
        App\Http\Controllers\AuthController::class,
        'logout'
    ])->name('logout');
   
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [
        App\Http\Controllers\AuthController::class,
        'login'
    ])->name('app.login');

    Route::post('/login/verify', [
        App\Http\Controllers\AuthController::class,
        'login_verify'
    ])->name('app.login.verify');

    Route::get('/registration', [
        App\Http\Controllers\AuthController::class,
        'registration'
    ])->name('app.registration');

    Route::post('/registration/verify', [
        App\Http\Controllers\AuthController::class,
        'registration_verify'
    ])->name('app.registration.verify');


});