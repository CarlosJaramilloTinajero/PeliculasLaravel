<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\serie;

class SeriresController extends Controller
{

    public function mostrarSerie($serie)
    {
        $serieF = serie::find($serie);
        return view('vistas_del_sitio_extras.mostrarSerie', ['serie' => $serieF]);
    }

    public function mostrarSeries()
    {
        $categorias = categoria::all();
        $series = serie::all();
        return view('vistas_del_sitio_extras.Series', ['categorias' => $categorias, 'series' => $series]);
    }

    public function mostrar_series_por_categoria($categoria)
    {
        $series = serie::all();
        $categorias = categoria::all();
        $categoriam = categoria::find($categoria);

        return view('vistas_del_sitio_extras.series_por_categoria', ['categoria' => $categoriam, 'series' => $series, 'categorias' => $categorias]);
    }
}
