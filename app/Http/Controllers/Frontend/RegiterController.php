<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegiterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function Register(RegisterRequest $request)
    {
        // User::creta es un metodo para crear el objeto
        // $request->validate() Esto va a llamar a las roules de la clase de RegisterRequest y va a permitir o no crear el usuario
        $user = User::create($request->validated());
        return redirect()->route('login')->with('success', 'Usuario creado correctamente');
    }
}
