<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/add-product', function () {
    return view('add-product');
});

Route::post('/submit-product', [ProductController::class, 'addProduct']);