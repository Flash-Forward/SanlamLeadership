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

Route::get('/', [App\Http\Controllers\RoomController::class, 'landingPage'])->name('landing');

Route::get('/register/check', [App\Http\Controllers\RoomController::class, 'checkEmail'])->name('email.check');


Route::get('/register/sa', function () {
    return view('auth.register2');
})->name('register.sa');

Route::get('/register/ba', function () {
    return view('auth.register3');
})->name('register.ba');

Auth::routes(['verify' => true]);

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/room', function () {
        return view('conference.room');
    })->name('room');
    Route::get('/breakawayroom', function () {
        return view('conference.breakaway');
    })->name('breakawayroom');
    Route::get('/breakawayroom/2', function () {
        return view('conference.breakaway2');
    })->name('breakawayroom2');
    Route::get('/networkingroom', function () {
        return view('conference.networking');
    })->name('networkingroom');
    // Route::get('/lobby', function () {
    //     // dd(session()->all());

    //     return view('lobby2');
    // })->name('lobby');

    Route::get('/speaker', function () {
        return view('speaker.landing');
    })->name('speaker');

    // Route::get('/breakaway', function () {
    //     return view('breakaway');
    // })->name('breakaway');
    Route::get('/lobby', [App\Http\Controllers\RoomController::class, 'mainLobby'])->name('lobby');
    Route::get('/breakaway', [App\Http\Controllers\RoomController::class, 'breakawayRoom'])->name('breakaway');
    Route::get('/exhibition', [App\Http\Controllers\RoomController::class, 'exhibitionHall'])->name('exhibition');
    Route::get('/innovator', function () {
        return view('innovator');
    })->name('innovator');
    Route::get('/networking', function () {
        return view('networking');
    })->name('networking');
    Route::get('/help', function () {
        return view('help');
    })->name('help');

    Route::get('/exhibitor/1', function () {
        return view('conference.flashforward');
    })->name('flashforward');
    Route::get('/exhibitor/2', function () {
        return view('conference.wizzardly');
    })->name('wizzardly');
    Route::get('/exhibitor/3', function () {
        return view('conference.alchemy');
    })->name('alchemy');
    Route::get('/exhibitor/4', function () {
        return view('conference.welink');
    })->name('welink');

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', function () {
        return view('lobby');
    })->name('home');
});