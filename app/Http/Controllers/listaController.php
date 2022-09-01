<?php

namespace App\Http\Controllers;

use App\Models\lista;
use App\Models\pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listaController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $peliculas = pelicula::all();
            $listas = lista::all();
            return view('vistas_del_sitio_extras.Lista', ['listas' => $listas, 'peliculas' => $peliculas]);
        } else {
            return redirect()->route('extras');
        }
    }

    public function store($pelicula)
    {
        if (Auth::check()) {
            $lista = new lista();
            $lista->idUser =  auth()->user()->id;
            $lista->idPelicula = $pelicula;
            $lista->save();
            return redirect()->back();
        }
        return redirect()->route('extras');
    }

    public function destroy($lista)
    {
        if (Auth::check()) {
            $listaF = lista::find($lista);
            $listaF->delete();
            return redirect()->back();
        } else {
            return redirect()->route('extras');
        }
    }
}
