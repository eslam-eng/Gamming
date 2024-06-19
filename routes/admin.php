<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', [AuthController::class, 'loginForm'])->name('login');

        Route::post('login', [AuthController::class, 'singin'])->name('signin');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/',function (){
            return view('dashboard.pages.home');
        });
    });


});
