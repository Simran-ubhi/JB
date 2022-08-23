<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function clientform(Request $request){
        return view('newclient');
    }
}
