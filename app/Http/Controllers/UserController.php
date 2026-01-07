<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $data){

        $skills = $data->skills;
        $skills_data = implode(", ", $skills);
        echo "User Skills: " . $skills_data . "<br>";

        echo $data->city;
        echo "<br>";
        echo $data->gender;
        echo "<br>";
        echo $data->age;

        // return $data;
    }
}
