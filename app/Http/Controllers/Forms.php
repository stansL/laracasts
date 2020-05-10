<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forms extends Controller
{
    public function processForm(){
        return view('forms');
    }

    public function submitForm(Request $request){
        // print_r($request -> input());

        $validation = $request -> validate([
            'username' => 'bail|required|min:5',
            'password' => 'required|numeric'
        ]);
        print_r($validation);
    }
}
