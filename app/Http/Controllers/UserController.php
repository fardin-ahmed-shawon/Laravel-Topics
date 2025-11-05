<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUserName() {
        return "Fardin Ahmed";
    }

    function getUserAge() {
        return "23";
    }

    function getUserFromSlug($name) {
        return $name;
    }

    function loadUserDashboard() {
        return view('user-dashboard');
    }

    function loadUserProfile($name) {
        return view('user-profile', ['name' => $name]);
    }

    function adminLogin() {
        return view('admin.login');
    }
}
