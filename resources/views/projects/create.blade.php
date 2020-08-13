@extends('layout')

@section('title', 'Hello! | Crear projecto')

@section('content')

    <h1>Crear projecto</h1>

    @if( $errors->any() )
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label>
            Nombre del proyecto <br>
            <input type="text" name="title">
        </label>
        <br>
        <label>
            URL del proyecto <br>
            <input type="text" name="url">
        </label>
        <br>
        <label>
            Descripcion del proyecto <br>
            <textarea type="text" name="description"></textarea>
        </label>
        <br>
        <button>Guardar</button>

    </form>

@endsection