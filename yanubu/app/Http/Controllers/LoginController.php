<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\User;
use DB;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            if (Auth::user()->level == 'admin'){
                return redirect('/sadmin');
            }else{
                return redirect('/homepage');
            }
        }
        return redirect('/');
    }
}
