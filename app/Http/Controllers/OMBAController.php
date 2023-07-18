<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class OMBAController extends Controller
{
    function byLivewireMovies()
    {
        $categorias = categoria::all();
        return view('api-omba.add', ['categorias' => $categorias]);
    }

    function byVueMovies()
    {
        return view('api-omba.add-vue');
    }
}
