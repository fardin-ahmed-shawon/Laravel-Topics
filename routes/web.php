<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


Route::view('/about-us/service', 'about')->name('ab-s');
Route::get('show-about', [AboutController::class, 'getAbout']);


Route::view('/profile/user/{name}', 'user')->name('usr');
Route::get('get-user', [UserController::class, 'getUser']);