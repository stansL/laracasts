<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Middleware extends Controller
{
    //
    public function load(){
        return view('middleware');
    }
}
