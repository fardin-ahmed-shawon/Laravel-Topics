<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

// Added Basic route for the page view
Route::view('/page', 'page');

// Routes With Slug
Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ['name' => $name]);
});

// Routes with redirect
Route::redirect('/home', '/');


// Route Using Controller
Route::get('/user-name', [UserController::class, 'getUserName']);
Route::get('/user-age', [UserController::class, 'getUserAge']);

// Route with slug using Controller
Route::get('/user/{name}', [UserController::class, 'getUserFromSlug']);

// Route to load view from Controller
Route::get('/dashboard', [UserController::class, 'loadUserDashboard']);

// Route to load view with slug from Controller
Route::get('/user-profile/{name}', [UserController::class, 'loadUserProfile']);

// Admin Login Route
Route::get('/admin/login', [UserController::class, 'adminLogin']);



/////////// Vendor Area ///////////
Route::get('vendor-registration', [UserController::class, 'vendorRegistration']);
Route::get('vendor-login', [UserController::class, 'vendorLogin']);