<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function getAbout() {
        return to_route('ab-s');
    }

}
