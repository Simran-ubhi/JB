<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    function login(){
        echo "Hello";
    }
    function register(){
        return view('admin.newAdmin');
    }

    function create(Request $request){
        return $request->input();
    }
}
