<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function home(){
        return view('welcome');
    }


    public function search(Request $request){
        $request->validate([
            'pnumber' => 'required | min:10 | max:10 | integer'
        ]);

        $data = Clients::where('pnumber','=', $request->pnumber)->first();
        if($data){
            echo 'yes';
        } else{
            echo 'no';
        }
    }
}