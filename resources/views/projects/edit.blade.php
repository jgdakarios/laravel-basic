@extends('layout')

@section('title', 'Hello! | Crear projecto')

@section('content')

    <h1>Editar projecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        @include('projects._form', ['btnText' => 'Actualizar'])
    </form>

@endsection