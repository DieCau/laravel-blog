<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Retorna la Vista especificada por medio de un helper 'view' (funcion de uso interno)
        return view('home');
    }
}
