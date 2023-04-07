<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\pelicula;

class ControladorDeLSitio extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        $peliculas = pelicula::all();
        return view('frontend.home', ['categorias' => $categorias, 'peliculas' => $peliculas]);
    }
}
