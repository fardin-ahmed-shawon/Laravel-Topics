<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function student_dashboard() {
        return "Student Dashboard";
    }

    function addStudent() {
        return "Add Student";
    }

    function viewStudent($name) {
        return "Student Name: " . $name;
    }
}
