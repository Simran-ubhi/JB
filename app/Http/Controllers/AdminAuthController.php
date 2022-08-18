<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
class AdminAuthController extends Controller
{
    public function register(){
        return view('admin.newAdmin');
    }

    public function login(){
        return view('login');
    }

    public function create(Request $request){



        $request->validate([
            'Name' => 'required',
            'Category' => 'nullable',
            'Phone_Number' => 'required|integer',
            'Email' => 'required|email',
            'Password' =>'required',
            'D_O_B' =>'required',
            'Address'=>'required'
        ]);

        $create = Admin::create($request->all());
        if($create){
            return view('admin.dashboard');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }
}

