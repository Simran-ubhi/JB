<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;

class clientController extends Controller
{

    public function clientsindex(){
        $data = Clients::all();
        return view('clients',['clients' => $data]);
    }

    public function clientform(){
        return view('newclient');
    }

    public function addclient(Request $request){
        $request->validate([
        'cname' => 'required',
        'pnumber' => 'required',
        'City' => 'required',
        'Referredby' => 'required',
        ]);

        $create = Clients::create($request->all());
        if($create){
            return back()->with('Success','Client updated successfully');
        } else {
            return back()->with('Fail','Something went wrong');
        }
    }
}
