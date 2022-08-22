<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class userController extends Controller
{
    public function update(Request $request, $user)
    {
        $request->validate([
            'imgUser' => 'required|image'
        ]);

        $userE = User::find($user);
        $nameUser = $userE->name;

        if ($userE->imgUser == null) {
            if ($request->hasFile('imgUser')) {
                $archivo = $request->file('imgUser');
                $destino = 'Imagenes/imgPerfil/';
                $nombreArchiivo = time() . '-' . $nameUser;
                if ($archivo->move($destino, $nombreArchiivo)) {
                    $userE->imgUser = $destino . $nombreArchiivo;
                }
            } else {
                return redirect()->back()->with('error', 'Error al escoger la imagen');
            }
        } else {
            if ($request->hasFile('imgUser')) {

                if (!File::delete($userE->imgUser)) {
                    return redirect()->back()->with('error', 'Error al borrar la imagen');
                }

                $archivo = $request->file('imgUser');
                $destino = 'Imagenes/imgPerfil/';
                $nombreArchiivo = time() . '-' . $nameUser;
                if (!$archivo->move($destino, $nombreArchiivo)) {
                    return redirect()->back()->with('error', 'Error al cargar la imagen');
                } else {
                    $userE->imgUser = $destino . $nombreArchiivo;
                }
            } else {
                return redirect()->back()->with('error', 'Error al escoger la imagen');
            }
        }
        $userE->save();
        return redirect()->back()->with('success', 'Imagen de perfil modificada exitosamente');
    }
}
