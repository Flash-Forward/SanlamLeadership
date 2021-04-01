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
Auth::routes(['verify' => true]);
//Auth::routes();


Route::get('/sregister', [App\Http\Controllers\Auth\RegisterController::class, 'speaker'])->name('sregister');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/room', function () {
        return view('conference.room');
    })->name('room');
    Route::get('/breakawayroom', function () {
        return view('conference.breakaway');
    })->name('breakawayroom');
    Route::get('/networkingroom', function () {
        return view('conference.networking');
    })->name('networkingroom');
    Route::get('/lobby', function () {
        return view('lobby');
    })->name('lobby');
    Route::get('/speaker', function () {
        return view('speaker.landing');
    })->name('speaker');
    Route::get('/exhibition', function () {
        return view('exhibition');
    })->name('exhibition');
    Route::get('/breakaway', function () {
        return view('breakaway');
    })->name('breakaway');
    Route::get('/innovator', function () {
        return view('innovator');
    })->name('innovator');
    Route::get('/networking', function () {
        return view('networking');
    })->name('networking');
    Route::get('/help', function () {
        return view('help');
    })->name('help');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});