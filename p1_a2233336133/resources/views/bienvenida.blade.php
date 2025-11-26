@extends('layouts.app') 

@section('title', 'Bienvenida')

@section('content')
    <div class="alert alert-success text-center" role="alert">
        <h1 class="display-4">Bienvenido a mi primera aplicación de Laravel</h1>
        <p class="lead">Esta es una ruta estática que utiliza Bootstrap para una mejor presentación.</p>
        <hr>
        <p>¡Todo el código de la tarea ha sido implementado correctamente!</p>
    </div>
    <div class="text-center">
        <a href="/saludo/TuNombre" class="btn btn-primary btn-lg">Probar Ruta Dinámica</a>
    </div>
@endsection