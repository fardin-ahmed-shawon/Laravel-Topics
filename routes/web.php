<?php

use Illuminate\Support\Facades\Route;

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