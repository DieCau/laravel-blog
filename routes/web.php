<?php

use Illuminate\Support\Facades\Route;

// Importar el archivo HomeController desde Http/Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

// Comentarios
// Cuando solo tenemos __invoke en el metodo NO hace falta pasar el nombre como tal, sin los [ ]
Route::get('/', HomeController::class);

// Pasamos 2 parámetros: la clase y el método
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('prueba', function() {
    // Creo una instancia del modelo Post y lo asigno en var $post
    $post = new Post;

    // Asignamos los campos al registro nuevo
    $post->title = 'Titulo de prueba 1';
    $post->content = 'Contenido de prueba 1';
    $post->category = 'Categoria de prueba 1';

    // Guardar los datos
    $post->save();

    return $post;
});




