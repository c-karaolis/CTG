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

Route::get('/', function () {
    return view('home');
});

Route::get('/activities/board-games', function () {
    return view('activities.board-games');
});
Route::get('/activities/role-playing-games', function () {
    return view('activities.role-playing-games');
});
Route::get('/activities/card-games', function () {
    return view('activities.card-games');
});
Route::get('/activities/exhibitors', function () {
    return view('activities.exhibitors');
});
Route::get('/activities/open-gaming', function () {
    return view('activities.open-gaming');
});
Route::get('/activities/miniature-wargames', function () {
    return view('activities.miniature-wargames');
});
