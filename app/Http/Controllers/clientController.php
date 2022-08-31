<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function clientform(){
        return view('employee.newclient');
    }

    public function addclient(Request $request){
        $request->validate([
        'cname' => 'required',
        'pnumber' => 'required',
        'Referredby' => 'required',
        'ticket' => 'required',
        'paidticket' => 'required',
        'paidfood' => 'required',
        'discount' => 'required',
        'payableamount' => 'required',
        'paymentmethod' => 'required',
        'referreceID' => 'required'
        ]);

        $create = Clients::create($request->all());
        if($create){
            return back()->with('Success','Client updated successfully');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }
}
