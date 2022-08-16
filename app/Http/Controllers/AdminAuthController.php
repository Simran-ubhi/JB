<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{


    public function register(){
        return view('admin.newAdmin');
    }

    public function login(){
        echo "Hello";
    }

    public function create(Request $request){
        return $request->input();
    }
}
