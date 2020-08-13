@extends('layout')

@section('title', 'Hello! | Portfolio')

@section('content')

    <h1>Portfolio</h1>
    
    @forelse($projects as $project)
        <!-- <li>{{ $project->title }} <br><small>{{ $project->description }}</small> <br> {{ $project->created_at->format('Y-m-d') }} </li> -->
        <!-- <li>{{ $project->title }} <br><small>{{ $project->description }}</small> <br> {{ $project->created_at->diffForHumans() }} </li> -->
        <li><a href=" {{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse

    {{ $projects->links() }}

@endsection