<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Requests extends Controller
{
    public function load(Request $request, $id){
        // echo $id; // get path options
        // return view('requests'); // get querries
        // $data = $request -> input();
        // $url = $request -> url(); //get url
        // $fullUrl = $request -> fullUrl(); //get full url
        $all = $request -> all();
        print_r($all);
    }

}
