<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\Contactus\ContactusController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', [AuthController::class, 'loginForm'])->name('login');

        Route::post('login', [AuthController::class, 'signIn'])->name('signin');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/',function (){
            return view('dashboard.pages.home');
        })->name('dashboard');
    });

    Route::get('contact-us',[ContactusController::class,'index'])->name('dashboard.contact-us');
    Route::get('contact-us/{contactus}/make-reply',[ContactusController::class,'reply'])->name('dashboard.make-reply');


});
