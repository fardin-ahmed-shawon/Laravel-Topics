<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginCheck;
use App\Http\Middleware\RoleCheck;

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


// Single Middleware usage
//Route::view('/login', 'login')->middleware(LoginCheck::class);

// Multiple Middleware usage
Route::view('/login', 'login')->middleware([LoginCheck::class, RoleCheck::class]);