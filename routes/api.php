<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function () {

});
Route::group(['middleware' => 'guest'], function () {
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('registration', [RegisterController::class, 'registration'])->name('register');
    Route::post('applications', [ApplicationController::class, 'store']);

});

