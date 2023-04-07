<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\lista;
use App\Models\pelicula;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{

    public function showTrailer($pelicula)
    {
        if (Auth::check()) {
            $peliculaT = pelicula::find($pelicula);
            return view('frontend.modules.movies.ver-trailer', ['pelicula' => $peliculaT]);
        }
        return redirect()->route('login')->with('error', 'Para ver un trailer primero necesitas iniciar sesion');
    }

    public function showMovie($pelicula)
    {
        if (Auth::check()) {

            $peliculaT = pelicula::find($pelicula);
            return view('frontend.modules.movies.ver-pelicula', ['pelicula' => $peliculaT]);
        }
        return redirect()->route('login')->with('error', 'Para ver una pelicula primero necesitas iniciar sesion');
    }

    public function showMovies()
    {
        $categorias = categoria::all();
        $peliculas = pelicula::all();
        return view('frontend.modules.movies.peliculas', ['peliculas' => $peliculas, 'categorias' => $categorias]);
    }

    public function showMoviesByCategory($categoria)
    {
        $peliculas = pelicula::all();
        $categorias = categoria::all();
        $categoriam = categoria::find($categoria);

        return view('frontend.modules.movies.peliculas-por-categoria', ['categoria' => $categoriam, 'peliculas' => $peliculas, 'categorias' => $categorias]);
    }

    public function showMovieView($pelicula)
    {
        $peliculaN = pelicula::find($pelicula);
        $peliculas = pelicula::all();
        $listas = lista::all();
        return view('frontend.modules.movies.showPelicula', ['pelicula' => $peliculaN, 'peliculas' => $peliculas, 'listas' => $listas]);
    }
}
