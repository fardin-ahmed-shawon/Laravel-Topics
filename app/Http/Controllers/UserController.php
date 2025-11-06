<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    function vendorRegistration() {
        return view('vendor.registration');
    }

    function vendorLogin() {
        if (View::exists('vendor.login')) {
            return view('vendor.login');
        } else {
            echo "View Not Found";
        }
    }

    function getVendorList() {
        $title = "Vendor List Page";
        $name = "Fardin";
        $vendors = ["Shop One", "Shop Two"];
        return view('vendor-list', [
            'title' => $title,
            'name' => $name,
            'vendors' => $vendors
        ]);
    }
}
