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
        $peliculas = pelicula::paginate(20);
        return view('frontend.modules.movies.peliculas', ['peliculas' => $peliculas, 'categorias' => $categorias]);
    }

    public function showMoviesByCategory($categoria)
    {
        $categorias = categoria::all();
        $categoriam = categoria::with('peliculas')->find($categoria);
        $peliculas = pelicula::where('categoria_id', $categoriam->id)->paginate(20);

        $opacityBoxShadows = '.15';
        return view('frontend.modules.movies.peliculas-por-categoria', ['peliculas' => $peliculas, 'opacityBoxShadows' => $opacityBoxShadows, 'categoria' => $categoriam, 'categorias' => $categorias]);
    }

    public function showMovieView($pelicula)
    {
        $peliculaN = pelicula::with('category')->find($pelicula);
        $related = pelicula::with('category')->where('id', '!=', $peliculaN->id)->where('categoria_id', $peliculaN->categoria_id)->take(9)->get();
        $opacityBoxShadows = '.6';
        return view('frontend.modules.movies.show-movie', ['opacityBoxShadows' => $opacityBoxShadows, 'pelicula' => $peliculaN, 'related' => $related]);
    }
}
