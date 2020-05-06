<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tutorial extends Controller {
    //

    public function show( $id ) {
        // echo 'Hello from the new controller!'.$id;
        return view( 'welcome' );
    }
}
