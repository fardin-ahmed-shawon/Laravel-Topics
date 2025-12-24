<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addProduct(Request $data) {
        echo "Product Added. <br>";
        echo $data->title . " - ";
        echo $data->price;
    }
}
