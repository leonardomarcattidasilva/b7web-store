<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->middleware('auth');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/saveRegister', 'saveRegister')->name('saveRegister');
    Route::get('/login', 'login')->name('login');
    Route::get('/forgotPassword', 'forgotPassword')->name('forgotPassword');
    Route::post('/loginAction', 'loginAction')->name('loginAction');
});
