<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// Route::get('/student/dashboard', [StudentController::class, 'student_dashboard']);
// Route::get('/student/add-student', [StudentController::class, 'addStudent']);
// Route::get('/student/view-student', [StudentController::class, 'viewStudent']);

Route::prefix('student')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'student_dashboard']);
    Route::get('/add-student', [StudentController::class, 'addStudent']);
    Route::get('/view-student', [StudentController::class, 'viewStudent']);
});