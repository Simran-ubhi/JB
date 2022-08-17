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
            'admtype' => 'required',
            'admname' => 'required',
            'admcontact' => 'required|integer',
            'admemail' => 'required|email',
            'adminPassword' =>'required',
            'adm-DOB' =>'required',
            'admadrss'=>'required'
        ]);

        //insert
        $admin = new Admin;
        $admin->Category = $request->Category;
        $admin->admname = $request->admname;
        $admin->Email = $request->Email;
        $admin->Phone_Number = $request->Phone_Number;
        $admin->Password = $request->Password;
        $admin->D_O_B = $request->D_O_B;
        $admin->Address = $request->Address;

        $create = $admin->create();

        if($create){
            return back()->with('Success','New admin created');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }
}
