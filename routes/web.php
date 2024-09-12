<?php

use Illuminate\Support\Facades\Route;

// Importar el archivo HomeController desde Http/Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Cuando solo tenemos __invoke en el metodo NO hace falta pasar el nombre como tal
Route::get('/', [HomeController::class]);

// Pasamos 2 parámetros: la clase y el método
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);


