@extends('layout')

@section('title')
Hello! | About
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="/img/about.svg" alt="Quien soy">
            </div>

            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Quien soy</h1>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aut deleniti sapiente repudiandae 
                    sit possimus dolores incidunt? Natus tempora eius, quae porro, vitae minus, unde voluptas sapiente 
                    deleniti perspiciatis fugit!
                </p>

                <a class="btn btn-large btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
                <a class="btn btn-large btn-block btn-outline-primary" href="{{ route('projects.index') }}">Proyectos</a>
            </div>

            
        </div>
    </div>

@endsection