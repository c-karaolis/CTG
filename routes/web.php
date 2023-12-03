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

Route::get('/attractions/board-games', function () {
    return view('attractions.board-games');
});
Route::get('/attractions/role-playing-games', function () {
    return view('attractions.role-playing-games');
});
Route::get('/attractions/card-games', function () {
    return view('attractions.card-games');
});
Route::get('/attractions/exhibitors', function () {
    return view('attractions.exhibitors');
});
Route::get('/attractions/open-gaming', function () {
    return view('attractions.open-gaming');
});
Route::get('/attractions/miniature-wargames', function () {
    return view('attractions.miniature-wargames');
});
