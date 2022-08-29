<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{

   
    public function Admregister(){
        return view('admin.newAdmin');
    }

    public function Admcreate(Request $request){

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



    public function Admlogin(){
        return view('admin.login');
    }

    public function Adminlogin(Request $request){
     
        $request->validate([
            'Name' => 'required',
            'Password' => 'required'
        ]);
        $admin = Admin::where('Name','=',$request->Name)->first();
        if(!$admin){
            return back()->with('fail','Invalid Credentials');
        }else{
                if($request->Password == $admin->Password){
                    $request->session()->put('LoggedUSer',$admin->AdminID);
                    return view('admin.dashboard');
                } else {
                    return back()->with('fail','Incorrect Password');
                }
            }
    }

    public function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
}
