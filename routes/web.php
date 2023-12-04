<?php

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

// Home
Route::get('/', function () {
    return view('home');
});

// About
Route::get('/about', function () {
    return view('about');
});

// Activities
Route::prefix('/activities')->group(function () {
    Route::get('/board-games', function () {
        return view('activities.board-games');
    });

    Route::get('/role-playing-games', function () {
        return view('activities.role-playing-games');
    });

    Route::get('/card-games', function () {
        return view('activities.card-games');
    });

    Route::get('/exhibitors', function () {
        return view('activities.exhibitors');
    });

    Route::get('/open-gaming', function () {
        return view('activities.open-gaming');
    });

    Route::get('/miniature-wargames', function () {
        return view('activities.miniature-wargames');
    });
});
