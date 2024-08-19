<!-- resources/views/home.blade.php -->
 
@extends('layouts.web')
 
@section('title', 'ASP Export Lanka - Home page')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection