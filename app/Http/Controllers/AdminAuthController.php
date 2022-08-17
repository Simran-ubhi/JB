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
        //validate

        $request->validate([
            'Name' => 'required',
            'Phone_Number' => 'required|integer',
            'Email' => 'required|email',
            'Password' =>'required',
            'D_O_B' =>'required',
            'Address'=>'required'
        ]);
        $create = Admin::create($request->all());
        if($create){
            return back()->with('Success','New admin created');
        } else {
            return back()->with('Fail','Something went wrong');
        }

    }
}
