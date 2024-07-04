<?php

use App\Http\Controllers\ContactusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.index');
})->name('index');

Route::get('/abjadiyat', function () {
    return view('website.abjadiyat');
})->name('abjadiyat');

Route::get('/about-us', function () {
    return view('website.about-us');
})->name('about-us');

Route::get('/beyti-bee', function () {
    return view('website.beyti-bee');
})->name('beyti-bee');

Route::get('/blog', function () {
    return view('website.blog');
})->name('blog');

Route::get('/blog/details', function () {
    return view('website.blog-details');
})->name('blog-details');

Route::get('/color', function () {
    return view('website.color');
})->name('color');


Route::get('/community', function () {
    return view('website.community');
})->name('community');

Route::get('/contact-us', function () {
    return view('website.contact');
})->name('contact-us');

Route::get('/frog', function () {
    return view('website.frog');
})->name('frog');


Route::get('/games', function () {
    return view('website.games');
})->name('games');

Route::get('/game-details', function () {
    return view('website.game_details');
})->name('game-details');

Route::get('/global-awords', function () {
    return view('website.global-awords');
})->name('global-awords');

Route::get('/hady', function () {
    return view('website.hady');
})->name('hady');

Route::get('/impulse', function () {
    return view('website.impulse');
})->name('impulse');

Route::get('/ithraa', function () {
    return view('website.ithraa');
})->name('ithraa');

Route::get('/kingdom', function () {
    return view('website.kingdom');
})->name('kingdom');

Route::get('/kooz', function () {
    return view('website.kooz');
})->name('kooz');

Route::get('/letters', function () {
    return view('website.letters');
})->name('letters');

Route::get('/pass', function () {
    return view('website.pass');
})->name('pass');

Route::get('/pharmlator', function () {
    return view('website.pharmlator');
})->name('pharmlator');

Route::get('/puppy', function () {
    return view('website.puppy');
})->name('puppy');

Route::get('/race', function () {
    return view('website.race');
})->name('race');

Route::get('/secrets', function () {
    return view('website.secrets');
})->name('secrets');

Route::get('/service-details', function () {
    return view('website.services-details');
})->name('service-details');

Route::get('/skull', function () {
    return view('website.skull');
})->name('skull');

Route::get('/srip', function () {
    return view('website.srip');
})->name('srip');

Route::post('contact-us',[ContactusController::class,'store'])->name('contact-us');
