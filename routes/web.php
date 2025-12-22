<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

// Routes With Slug
Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ['name' => $name]);
});

// Routes with redirect
Route::redirect('/home', '/');


/////////// Vendor Area ///////////
Route::get('vendor-registration', [UserController::class, 'vendorRegistration']);
Route::get('vendor-login', [UserController::class, 'vendorLogin']);
Route::get('vendor-list', [UserController::class, 'getVendorList']);

/////////// Page ///////////
Route::get('/page', function () {
    return view('page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});