@extends('layouts.layout')

@section('title', 'Blade Templates Title')

@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection