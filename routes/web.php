<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/first', 'first');

Route::view('/contacts', 'contacts');

// Add parameters to the url
Route::get('/second/{id}', function ($id) {
    return "Some parmater " . $id;
});

Route::redirect('welcome',"come",301);


Route::get('/about','About@load');

Route::get('/forms','Forms@processForm');
Route::post('/submit','Forms@submitForm');

Route::get('/requests/{id}','Requests@load');

Route::get('/tutorial/{id}','Tutorial@show');


Route::get('/third/{name}',function($name){
    // return view('third',['name' => 'Stanslaus']);
    return view('third',['name' => $name]);
});