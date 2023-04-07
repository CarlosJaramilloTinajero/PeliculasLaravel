<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\pelicula;
use App\Models\serie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && auth()->user()->name == "admin") {
            $categorias = categoria::all();

            return view('vistasCategorias.index', ['categorias' => $categorias]);
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
            return view('vistasCategorias.agregarCategoria');
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
        if (!Auth::check() || auth()->user()->name != "admin") {
            return redirect()->route('home');
        }
        $request->validate([
            'nombre' => 'required|min:4',
            'descripcion' => 'required|min:10'
        ]);

        $categoria = new categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->Tipo = $request->Tipo;
        $categoria->Color = $request->color;


        $categoria->save();

        return redirect()->route('categoria.index')->with('success', 'Categoria agregada');
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
            $categoria = categoria::find($id);
            if ($categoria->Tipo == "serie") {
                $tipo = serie::all();
            } else {
                $tipo = pelicula::all();
            }

            return view('vistasCategorias.editarCategoria', ['categoria' => $categoria, 'tipo' => $tipo]);
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
        if (!Auth::check() || auth()->user()->name != "admin") {
            return redirect()->route('home');
        }
        $request->validate([
            'nombre' => 'required|min:4',
            'descripcion' => 'required|min:10'
        ]);

        $categoria = categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->Tipo = $request->Tipo;
        $categoria->Color = $request->color;

        $categoria->save();

        return redirect()->route('categoria.index')->with('success', 'Categoria actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::check() || auth()->user()->name != "admin") {
            return redirect()->route('home');
        }

        $categoria = categoria::find($id);

        //Con esta linea de codigo se eliminan primero los registros de la tablatodos que tengan como llave foranea el id de la categoria a elimainar

        if ($categoria->tipo == "serie") {
            $categoria->series()->each(function ($serie) {
                if (!File::delete($serie->imagen)) {
                    return redirect()->back()->with('error', 'Error al borrar la imagen');
                }
                $serie->delete();
            });
        } else {
            $categoria->peliculas()->each(function ($pelicula) {
                if (!File::delete($pelicula->ImagenCartel)) {
                    return redirect()->back()->with('error', 'Error al borrar la imagen');
                }
                $pelicula->delete();
            });
        }


        $categoria->delete();

        return redirect()->back()->with('success', 'Categoria eliminada');
    }
}
