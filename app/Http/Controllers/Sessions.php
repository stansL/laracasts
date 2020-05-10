<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sessions extends Controller
{
    //
    public function show(){
        return view('sessions');
    }

    public function posts(Request $request){
        // print_r($request -> input());

        $request -> session() -> put('user',$request -> input('username')); //check out flash for single entry into session after use
        print_r( $request -> session() -> get('user'));
        return view('welcome') -> with('loggeduser', $request -> session() -> get('user')) ;
    }
}
