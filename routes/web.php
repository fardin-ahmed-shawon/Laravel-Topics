<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});


// Route grouping with controller
// Route::controller(StudentController::class)->group(function () {
//     Route::get('student/dashboard', 'student_dashboard');
//     Route::get('student/add-student', 'addStudent');
//     Route::get('student/view-student', 'viewStudent');
// });


// Route grouping with controller & prefix
Route::controller(StudentController::class)->prefix('student')->group(function () {
    Route::get('/dashboard', 'student_dashboard');
    Route::get('/add-student', 'addStudent');
    Route::get('/view-student/{name}', 'viewStudent');
});