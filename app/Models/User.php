<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    // If a different table name using for User Model then
    // protected $table = 'd-users';

    function getUserId() {
        return "User ID will return";
    }

}
