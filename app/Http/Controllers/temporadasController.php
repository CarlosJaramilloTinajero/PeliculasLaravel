<?php

namespace App\Http\Controllers;

use App\Models\serie;
use App\Models\temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TemporadasController extends Controller
{
    public function index($serie)
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $serieF = serie::find($serie);
            $temporadas = temporada::all();
            return view('temporadas.index', ['serie' => $serieF, 'temporadas' => $temporadas]);
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request, $serie)
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $request->validate([
                'numero' => 'required|min:1',
                'descripcion' => 'required|min:10|max:500',
                'imagen' => 'required|image'
            ]);
            $temporada = new temporada();
            $serieF = serie::find($serie);
            $temporada->numero = $request->numero;
            $temporada->descripcion = $request->descripcion;

            if ($request->hasFile('imagen')) {
                $archivo = $request->file('imagen');
                $destino = 'Imagenes/series/Temporadas/';
                $nombreArchiivo = time() . '-' . $serieF->nombre . '-Temp_' . $request->numero;
                if ($archivo->move($destino, $nombreArchiivo)) {
                    $temporada->imagen = $destino . $nombreArchiivo;
                }
            }

            $temporada->serie_id = $serie;

            $temporada->save();
            return redirect()->route('temporadasAgregadas', ['serie' => $serie])->with('success', 'Temporada agregada');
        } else {
            return redirect()->back();
        }
    }

    public function show($serie, $temporada)
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $temporadaF = temporada::find($temporada);
            $serieF = serie::find($serie);

            return view('temporadas.editarTemporada', ['serie' => $serieF, 'temporada' => $temporadaF]);
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $serie, $temporada)
    {
        if (Auth::check() && auth()->user()->name == "admin") {

            if ($request->chbImagen == "si") {
                $request->validate([
                    'numero' => 'required|min:1',
                    'descripcion' => 'required|min:10'
                ]);
            } else {
                $request->validate([
                    'numero' => 'required|min:1',
                    'descripcion' => 'required|min:10',
                    'imagen' => 'required|image'
                ]);
            }
            $temporada = temporada::find($temporada);
            $serieF = serie::find($serie);

            $temporada->numero = $request->numero;
            $temporada->descripcion = $request->descripcion;

            if ($request->chbImagen != "si") {

                if ($request->hasFile('imagen')) {

                    if (!File::delete($temporada->imagen)) {
                        return redirect()->back()->with('error', 'Error al borrar la imagen');
                    }

                    $archivo = $request->file('imagen');
                    $destino = 'Imagenes/series/Temporadas/';
                    $nombreArchiivo = time() . '-' . $serieF->nombre . '-Temp_' . $request->numero;
                    if (!$archivo->move($destino, $nombreArchiivo)) {
                        return redirect()->back()->with('error', 'Error al cargar la imagen');
                    } else {
                        $temporada->imagen = $destino . $nombreArchiivo;
                    }
                } else {
                    return redirect()->back()->with('error', 'Error al escoger la imagen');
                }
            }
            $temporada->save();

            return redirect()->route('temporadasAgregadas',['serie' => $serie])->with('success', 'Temporada modificada correctamente');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($temporada)
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $temporadaF = temporada::find($temporada);
            if (!File::delete($temporadaF->imagen)) {
                return redirect()->back()->with('error', 'Error al borrar la imagen');
            }
            $temporadaF->delete();
            return redirect()->back()->with('success', 'Temporada eliminada correctamente');
        } else {
            return redirect()->back();
        }
    }

    public function agregarTemporada($serie)
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $serieF = serie::find($serie);
            return view('temporadas.agregarTemporada', ['serie' => $serieF]);
        } else {
            return redirect()->back();
        }
    }
}
