<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){

        }
       if(!session()->has('loggedUser') && ($request->path() != 'admin/login' && $request-> path)) {
        return redirect('admin/login')->with('fail','You must login as an Admin');
       }

       if(session()->has('LoggedUser') && ($request->path() == 'admin/login')){
        return back();
       }
    }

}

