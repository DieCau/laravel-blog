<?php

use Illuminate\Support\Facades\Route;

// Importar el archivo HomeController desde Http/Controllers
use App\Http\Controllers\HomeController;

// Pasamos 2 parámetros: la clase y el método
Route::get('/', [HomeController::class, 'index']);

Route::get('/posts/create', function () {
    return "Aqui se mostrará un formulario para crear un post";
});

Route::get('/posts/{post}', function($post) {
    return "Aqui se mostrará el post {$post}";
});


