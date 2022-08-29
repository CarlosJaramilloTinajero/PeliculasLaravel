<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\lista;
use App\Models\pelicula;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;



use function PHPUnit\Framework\returnValueMap;

class controladorDeLSitio extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        $peliculas = pelicula::all();
        return view('vistas_del_sitio_extras.index', ['categorias' => $categorias, 'peliculas' => $peliculas]);
    }

    public function verTrailer($pelicula)
    {
        if (Auth::check()) {
            $peliculaT = pelicula::find($pelicula);
            return view('vistas_del_sitio_extras.verTrailer', ['pelicula' => $peliculaT]);
        }
        return redirect()->route('login')->with('error', 'Para ver un trailer primero necesitas iniciar sesion');
    }

    public function verPelicula($pelicula)
    {
        if (Auth::check()) {

            $peliculaT = pelicula::find($pelicula);
            return view('vistas_del_sitio_extras.verPelicula', ['pelicula' => $peliculaT]);
        }
        return redirect()->route('login')->with('error', 'Para ver una pelicula primero necesitas iniciar sesion');
    }

    public function Cuenta()
    {
        if (Auth::check()) {
            // $password = Crypt::decrypt(auth()->user()->password, true);
            // return view('vistas_del_sitio_extras.cuenta', ['password' => $password]);

            return view('vistas_del_sitio_extras.cuenta');
        }
        return redirect()->route('extras');
    }


    public function index_series()
    {
        return view('vistas_del_sitio_extras.Series');
    }

    public function index_Peliculas()
    {
        $categorias = categoria::all();
        $peliculas = pelicula::all();
        return view('vistas_del_sitio_extras.peliculas', ['peliculas' => $peliculas, 'categorias' => $categorias]);
    }

    public function index_Peliculas_por_categoria($categoria)
    {
        $peliculas = pelicula::all();
        $categorias = categoria::all();
        $categoriam = categoria::find($categoria);

        return view('vistas_del_sitio_extras.Peliculas_por_categoria', ['categoria' => $categoriam, 'peliculas' => $peliculas, 'categorias' => $categorias]);
    }

    public function showPelicula($pelicula)
    {
        $peliculaN = pelicula::find($pelicula);
        $peliculas = pelicula::all();
        $listas = lista::all();
        return view('vistas_del_sitio_extras.showPelicula', ['pelicula' => $peliculaN, 'peliculas' => $peliculas, 'listas' => $listas]);
    }
}
