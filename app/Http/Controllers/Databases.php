<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Databases extends Controller
{
    //

    public function show()
    {
        $data = DB::select('select * from users where active = ?', [1]);
        // echo "<pre>";
        print_r($data);
        return view('databases');
    }

    public function save()
    {
        echo DB::insert('insert into users (city, first_name, last_name,active) values (?, ?, ?,?)', ['Kericho', 'Dayle', 'Black',1]);
    }

    public function update()
    {
        $affected =  DB::table('users')
        -> where('person_id', 9)
        -> update(['address' => "an update using the query builder"]);
        echo $affected;
    }

    public function delete()
    {
        $affected =  DB::delete('delete from users where person_id = ?', [8]);
        echo $affected;
    }
}
