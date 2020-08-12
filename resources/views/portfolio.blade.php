@extends('layout')

@section('title', 'Hello! | Portfolio')

@section('content')

    <h1>Portfolio</h1>

    @forelse($portfolio as $portfolioItem)
        <!-- <li>{{ $portfolioItem->title }} <br><small>{{ $portfolioItem->description }}</small> <br> {{ $portfolioItem->created_at->format('Y-m-d') }} </li> -->
        <!-- <li>{{ $portfolioItem->title }} <br><small>{{ $portfolioItem->description }}</small> <br> {{ $portfolioItem->created_at->diffForHumans() }} </li> -->
        <li>{{ $portfolioItem->title }}</li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse

    {{ $portfolio->links() }}

@endsection