<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;


class empController extends Controller
{
    public function Eregister(){
        return view('admin.newEmp');
    }

    public function Elogin(){
        return view('employee.empLogin');
    }

    public function profile(){
        return view('employee.profile');
    }

    public function create(Request $request){

        $request->validate([
            'category' => 'required',
            'employee_name' => 'required',
            'contact_1' => 'required|integer',
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

        $create = Employees::create($request->all());
        if($create){
            return view('employee.profile');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }
}

