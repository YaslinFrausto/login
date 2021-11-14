<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogCon extends Controller
{
    function ingresar(){
        return view('login');
    }

    function validar(Request $request){
        $user = $request->input('inuser');
        $pass = $request->input('inpass');
        return view('showlogin');
    }
    
}