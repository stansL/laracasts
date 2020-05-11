<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class Eloquent extends Controller
{
    //
    public function show()
    {
        $tester = DB::table('testers')
        -> join('orders', 'orders.user_id', 'testers.id') -> get();
        // echo "<pre>"; 
        // echo ($tester);
        return  $tester;
    }
}
