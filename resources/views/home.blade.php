@extends('layout')

@section('title', 'Hello! | Home')

@section('content')

    <h1>Hello</h1>

    @auth
        {{ auth()->user()->name }}
    @endauth
    
@endsection