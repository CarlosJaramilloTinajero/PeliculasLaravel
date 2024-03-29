<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;
use App\Models\categoria;
use App\Models\lista;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $peliculas = pelicula::all();
            $categorias = categoria::all();
            return view('vistasPeliculas.index', ['peliculas' => $peliculas, 'categorias' => $categorias]);
        } else {
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $categorias = categoria::all();
            return view('vistasPeliculas.agregarPelicula', ['categorias' => $categorias]);
        } else {
            return redirect()->route('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:4',
            'descripcion' => 'required|min:10',
            'ImagenCartel' => 'required|image',
            'linkPelicula' => 'required|min:10',
            'linkTrailer' => 'required|min:10'

        ]);
        $pelicula = new pelicula();

        $pelicula->nombre = $request->nombre;
        $pelicula->descripcion = $request->descripcion;

        if ($request->hasFile('ImagenCartel')) {
            $file = $request->file('ImagenCartel');
            $destino = 'Imagenes/imagenes_de_Cartel_Grande_Peliculas';

            if ($path = Storage::disk('public')->putFile($destino, $file)) {
                $pelicula->ImagenCartel = 'storage/' . $path;
            }
        }

        $pelicula->linkPelicula = $request->linkPelicula;
        $pelicula->linkTrailer = $request->linkTrailer;
        $pelicula->categoria_id = $request->categoria_id;

        $pelicula->save();

        return redirect()->route('pelicula.index')->with('success', 'Pelicula agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Auth::check() && auth()->user()->name == "admin") {
            $pelicula = pelicula::find($id);
            $categorias = categoria::all();
            return view('vistasPeliculas.editarPelicula', ['pelicula' => $pelicula, 'categorias' => $categorias]);
        } else {
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->chbImagen == "si") {
            $request->validate([
                'nombre' => 'required|min:4',
                'descripcion' => 'required|min:10',
                'linkPelicula' => 'required|min:10',
                'linkTrailer' => 'required|min:10'
            ]);
        } else {
            $request->validate([
                'nombre' => 'required|min:4',
                'descripcion' => 'required|min:10',
                'linkPelicula' => 'required|min:10',
                'linkTrailer' => 'required|min:10',
                'ImagenCartel' => 'required|image'
            ]);
        }

        $pelicula = pelicula::find($id);

        if ($request->chbImagen != "si") {

            if ($request->hasFile('ImagenCartel')) {

                if (strpos($pelicula->ImagenCartel, 'https://') == false) {
                    if (Storage::disk('public')->exists(str_replace('storage/', '', $pelicula->ImagenCartel))) {
                        if (!Storage::disk('public')->delete(str_replace('storage/', '', $pelicula->ImagenCartel))) {
                            return redirect()->back()->with('error', 'Error al borrar la imagen');
                        }
                    }
                }

                $file = $request->file('ImagenCartel');
                $destino = 'Imagenes/imagenes_de_Cartel_Grande_Peliculas';

                if (!$path = Storage::disk('public')->putFile($destino, $file)) {
                    return redirect()->back()->with('error', 'Error al cargar la imagen');
                }
                $pelicula->ImagenCartel = 'storage/' . $path;

            } else {
                return redirect()->back()->with('error', 'Error al escoger la imagen');
            }
        }

        $pelicula->nombre = $request->nombre;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->linkPelicula = $request->linkPelicula;
        $pelicula->linkTrailer = $request->linkTrailer;
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->save();

        return redirect()->route('pelicula.index')->with('success', 'Pelicula modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = pelicula::find($id);
        if (strpos($pelicula->ImagenCartel, 'https://') == false) {
            if (Storage::disk('public')->exists(str_replace('storage/', '', $pelicula->ImagenCartel))) {
                if (!Storage::disk('public')->delete(str_replace('storage/', '', $pelicula->ImagenCartel))) {
                    return redirect()->back()->with('error', 'Error al borrar la imagen');
                }
            }
        }

        $listas = $pelicula->lists;
        foreach ($listas as $lista) {
            $lista->delete();
        }

        $pelicula->delete();
        return redirect()->route('pelicula.index')->with('success', 'Pelicula eliminada correctamente');
    }
}
