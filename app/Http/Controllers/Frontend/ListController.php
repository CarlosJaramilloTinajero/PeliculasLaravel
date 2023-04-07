<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\lista;
use App\Models\pelicula;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $user = User::with('movies')->where('id', auth()->user()->id)->first();
            return view('frontend.modules.user.lista', ['user' => $user]);
        } else {
            return redirect()->route('home');
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
        return redirect()->route('home');
    }

    public function destroy($lista)
    {
        if (Auth::check()) {
            $listaF = lista::find($lista);
            $listaF->delete();
            return redirect()->back();
        } else {
            return redirect()->route('home');
        }
    }
}
