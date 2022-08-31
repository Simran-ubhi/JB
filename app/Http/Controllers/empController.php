<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class empController extends Controller
{
    public function Eregister(){
        return view('admin.newEmp');
    }

    public function Elogin(){
        return view('employee.empLogin');
    }

   

    public function create(Request $request){

        $request->validate([
            'category' => 'required',
            'employee_name' => 'required',
            'contact_1' => 'required',
            'contact_2' => 'integer',
            'emp_email' => 'required|email',
            'emp_DOB' =>'required',
            'Emp_adress' =>'required',
            'active_City' =>'required',
            'monthly_customer_target' =>'required',
            'monthly_books_sale_target' =>'required',
            'monthly_sale_target' =>'required',
            'emp_password' =>'required'
        ]);

        $create=Employees::create($request->all());
        if($create){
            return back()->with('Success','Employee registered');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }



    public function empLogin(Request $request){
        $request->validate([
            'number' => 'required',
            'logpin' => 'required'
        ]);
        $emp = Employees::where('contact_1','=',$request->number)->first();
        if(!$emp){
            return back()->with('fail','Invalid number');
        } else {
        if($request->logpin == $emp->emp_password){
            $request->session()->put('LoggedEmp', $emp->empID);
            $empData = array(['LoggedEmp' =>Employees::where('empID','=',$emp['empID'])->first()->toArray()]);
            $empData = $empData[0]['LoggedEmp']['contact_1'];
            return view('employee.profile',compact('empData'));
        } else {
            return back()->with('fail','Incorrect Pin');
        }
    }
    }

    public function elogout(){
        if(session()->has('LoggedEmp')){
            session()->pull('LoggedEmp');
        }
        return view('welcome');
    }


    public function profile(){
        $empData = ['LoggedEmp'=>Employees::where('empID','=',session('LoggedEmp'))->first()];
        $a = 1;
        return view('employee.profile',['a'=>$a]);
    }
}



