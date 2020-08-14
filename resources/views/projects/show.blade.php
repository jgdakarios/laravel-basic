@extends('layout')

@section('title', 'Hello! | ' . $project->title )

@section('content')

    <h1>{{ $project->title }}</h1>
    <a href="{{ route('projects.edit', $project) }}">Editar proyecto</a>

    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>

@endsection