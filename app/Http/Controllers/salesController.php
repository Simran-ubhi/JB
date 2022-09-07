<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class salesController extends Controller
{
    public function newsaleform(){
        return view('newSale');
    }

    public function addsale(Request $request){
        $request->validate([
        'name' => 'required',
        'pnumber' => 'required|integer',
        'vouchers' => 'required',
        'cost' => 'required',
        'discount' => 'required',
        'total_amount' => 'required',
        ]);

        $create = Sale::create($request->all());
        if($create){
            return back()->with('Success','Sale Recorded successfully');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }
}
