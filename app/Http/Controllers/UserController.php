<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUsers() {
        $users ='\App\Models\User'::all();
        return $users;
    }
}
