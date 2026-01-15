<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUsers() {

        $data = new \App\Models\User;
        echo $data->getUserId();

        $users ='\App\Models\User'::all();
        return view('users', ['users' => $users]);
    }
}
