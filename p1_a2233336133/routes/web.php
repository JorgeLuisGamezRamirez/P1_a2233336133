<?php

use Illuminate\Support\Facades\Route;
// Importa el controlador
use App\Http\Controllers\PaginaController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación. Estos
| serán cargados por el RouteServiceProvider dentro de un grupo
| que contiene el middleware "web". ¡Crea algo genial!
|
*/

// Ruta Raíz (opcional, deja la que viene por defecto o modifícala)
Route::get('/', function () {
    return view('welcome');
});

// 1. Ruta Estática de Bienvenida (/bienvenida)
// Conecta la URL /bienvenida con el método 'bienvenida' del PaginaController.
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

// 2. Ruta Dinámica de Saludo (/saludo/{nombre})
// El {nombre} indica un parámetro variable. Este valor se pasa al método 'saludo'.
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);