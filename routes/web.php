<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Single route with middleware
Route::view('/about', 'about')->middleware('check1');

// Grouping routes with the same middleware
Route::middleware(['check1'])->group(function () {
    Route::view('/profile', 'about')->middleware('check1');
    Route::view('/dashboard', 'about')->middleware('check1');
    Route::view('/change-password', 'about')->middleware('check1');
    Route::view('/register', 'about')->middleware('check1');
});