<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\lista;
use App\Models\serie;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriresController extends Controller
{
    public function index()
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $series = serie::all();
            $categorias = categoria::all();
            return view('vistasSeries.index', ['series' => $series, 'categorias' => $categorias]);
        } else {
            return redirect()->route('home');
        }
    }

    public function show($id)
    {

        if (Auth::check() && auth()->user()->name == "admin") {
            $serie = serie::find($id);
            $categorias = categoria::all();
            return view('vistasSeries.editarSerie', ['serie' => $serie, 'categorias' => $categorias]);
        } else {
            return redirect()->route('home');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->chbImagen == "si") {
            $request->validate([
                'nombre' => 'required|min:4',
                'descripcion' => 'required|min:10'
            ]);
        } else {
            $request->validate([
                'nombre' => 'required|min:4',
                'descripcion' => 'required|min:10',
                'imagen' => 'required|image'
            ]);
        }
        $serie = serie::find($id);

        if ($request->chbImagen != "si") {

            if ($request->hasFile('imagen')) {

                if (!File::delete($serie->imagen)) {
                    return redirect()->back()->with('error', 'Error al borrar la imagen');
                }

                $archivo = $request->file('imagen');
                $destino = 'Imagenes/series/';
                $nombreArchiivo = time() . '-' . $archivo->getClientOriginalName();
                if (!$archivo->move($destino, $nombreArchiivo)) {
                    return redirect()->back()->with('error', 'Error al cargar la imagen');
                } else {
                    $serie->imagen = $destino . $nombreArchiivo;
                }
            } else {
                return redirect()->back()->with('error', 'Error al escoger la imagen');
            }
        }

        $serie->nombre = $request->nombre;
        $serie->descripcion = $request->descripcion;
        $serie->categoria_id = $request->categoria_id;
        $serie->save();

        return redirect()->route('seriesAgregadas')->with('success', 'Serie modificada correctamente');
    }

    public function create()
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $categorias = categoria::all();
            return view('vistasSeries.agregarSerie', ['categorias' => $categorias]);
        } else {
            return redirect()->route('home');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:4',
            'descripcion' => 'required|min:10',
            'imagen' => 'required|image'
        ]);
        $serie = new serie();

        $serie->nombre = $request->nombre;
        $serie->descripcion = $request->descripcion;

        if ($request->hasFile('imagen')) {
            $archivo = $request->file('imagen');
            $destino = 'Imagenes/series/';
            $nombreArchiivo = time() . '-' . $archivo->getClientOriginalName();
            if ($archivo->move($destino, $nombreArchiivo)) {
                $serie->imagen = $destino . $nombreArchiivo;
            }
        }
        $serie->categoria_id = $request->categoria_id;

        $serie->save();

        // return redirect()->route('Series.index')->with('success', 'Pelicula agregada correctamente');
        return redirect()->route('seriesAgregadas')->with('success', 'Serie agregada correctamente');
    }

    public function destroy($id)
    {
        $serie = serie::find($id);
        if (!File::delete($serie->imagen)) {
            return redirect()->back()->with('error', 'Error al borrar la imagen');
        }

        $listas = lista::all();
        foreach ($listas as $lista) {
            if ($lista->idSeries == $serie->id) {
                $lista->delete();
            }
        }
        $serie->delete();
        return redirect()->route('seriesAgregadas')->with('success', 'Serie eliminada correctamente');
    }
}
