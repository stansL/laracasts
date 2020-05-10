<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Localization extends Controller
{
    //
    public function show(){
        \App::setlocale('fr');
        return view('localization');
    }
}
