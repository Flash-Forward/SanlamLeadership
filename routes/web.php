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

Route::get('/schedule/1', [App\Http\Controllers\RoomController::class, 'schedule'])->name('schedule');
Route::get('/schedule/store', [App\Http\Controllers\RoomController::class, 'storeSchedule'])->name('storeSchedule');


Route::get('/', [App\Http\Controllers\RoomController::class, 'landingPage'])->name('landing');

Route::get('/register/check', [App\Http\Controllers\RoomController::class, 'checkEmail'])->name('email.check');
Route::get('/room/check', [App\Http\Controllers\RoomController::class, 'checkRoom'])->name('room.check');
Route::post('/openLogin', [App\Http\Controllers\RoomController::class, 'openLogin'])->name('openLogin');


//Route::get('/exhibition/test', [App\Http\Controllers\RoomController::class, 'exhibitionHall']);
//Route::get('/lobby/test', [App\Http\Controllers\RoomController::class, 'mainLobby']);

Route::get('/bluejeans', function () {
    return view('conference.webinarjam');
})->name('bluejeans');

Route::get('/polls', function () {
    return view('polls');
})->name('polls');

Route::get('/register/sa', function () {
    return view('auth.register2');
})->name('register.sa');

Route::get('/register/ba', function () {
    return view('auth.register3');
})->name('register.ba');

Auth::routes(['verify' => true]);

Route::get('/thankyou', [App\Http\Controllers\RoomController::class, 'thankyou'])->name('thankyou');
Route::get('/login', [App\Http\Controllers\RoomController::class, 'login'])->name('login');



Route::get('/mobile', function () {
    return view('devicenotsupported');
})->name('mobile');

Route::get('/lobby2', function () {
    return view('lobby2');
})->name('lobby2');


// Route::get('/exhibition', function () {
//     return view('exhibition');
// })->name('exhibition');

Route::get('/exhibition/layouts', function () {
    return view('exhibitionLayouts');
})->name('exhibitionLayouts');




Route::get('/exhibition/layouts/{stands}', [App\Http\Controllers\RoomController::class, 'exhibitionHallTest'])->name('exhibition.layouts');

Route::get('/sregister', [App\Http\Controllers\Auth\RegisterController::class, 'speaker'])->name('sregister');
Route::group(['middleware' => ['auth', 'role:1']], function() {

    Route::get('/speaker/{order?}', [App\Http\Controllers\RoomController::class, 'conference'])->name('speaker');

});
Route::group(['middleware' => ['auth']], function() {
    Route::get('/room/{order?}', [App\Http\Controllers\RoomController::class, 'conference'])->name('room');
    Route::get('/sponsor/{sponsor?}', [App\Http\Controllers\RoomController::class, 'sponsor'])->name('sponsor');

    Route::get('/sponsors', [App\Http\Controllers\RoomController::class, 'sponsorsMiddle'])->name('sponsors');

    Route::get('/breakawayroom', function () {
        return view('conference.breakaway');
    })->name('breakawayroom');
    Route::get('/breakawayroom/2', function () {
        return view('conference.breakaway2');
    })->name('breakawayroom2');
    Route::get('/networkingroom', function () {
        return view('conference.networking');
    })->name('networkingroom');

    Route::get('/lobby', [App\Http\Controllers\RoomController::class, 'mainLobby'])->name('lobby');
    Route::get('/breakaway', [App\Http\Controllers\RoomController::class, 'breakawayRoom'])->name('breakaway');
    Route::get('/networking', [App\Http\Controllers\RoomController::class, 'networkingLounge'])->name('networking');
    Route::get('/instructions', [App\Http\Controllers\RoomController::class, 'instructions'])->name('instructions');


    Route::get('/exhibition', [App\Http\Controllers\RoomController::class, 'exhibitionHall'])->name('exhibition');
    Route::get('/innovator', function () {
        return view('innovator');
    })->name('innovator');

});