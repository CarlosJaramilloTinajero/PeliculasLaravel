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
        $user = User::with('movies')->where('id', auth()->user()->id)->first();
        return view('frontend.modules.user.lista', ['user' => $user]);
    }

    public function store($pelicula)
    {
        $lista = new lista();
        $lista->idUser =  auth()->user()->id;
        $lista->idPelicula = $pelicula;
        $lista->save();
        return redirect()->back();
    }

    public function destroy($lista)
    {
        $listaF = lista::find($lista);
        $listaF->delete();
        return redirect()->back();
    }
}
