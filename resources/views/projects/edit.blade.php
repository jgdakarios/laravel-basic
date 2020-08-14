@extends('layout')

@section('title', 'Hello! | Crear projecto')

@section('content')

    <h1>Editar projecto</h1>

    @if( $errors->any() )
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        
        <label>
            Nombre del proyecto <br>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </label>
        <br>
        <label>
            URL del proyecto <br>
            <input type="text" name="url" value="{{ old('title', $project->url) }}">
        </label>
        <br>
        <label>
            Descripcion del proyecto <br>
            <textarea type="text" name="description">{{ old('title', $project->description) }}</textarea>
        </label>
        <br>
        <button>Actualizar</button>

    </form>

@endsection