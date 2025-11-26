@extends('layouts.app') 

@section('title', 'Saludo Personalizado')

@section('content')
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body text-center">
            <h1 class="card-title text-primary display-3">Hola, {{ $nombre }}</h1>
            <p class="card-text fs-5 mt-4">
                ¡Gracias por visitar nuestra página! Este saludo fue generado
                dinámicamente usando el parámetro de la URL.
            </p>
        </div>
        <div class="card-footer text-center">
             <a href="/bienvenida" class="btn btn-outline-secondary">Regresar a Bienvenida</a>
        </div>
    </div>
@endsection