<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{

    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('extras');
        }
        return view('auth.Login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {
            // return redirect()->route('login')->withErrors('auth.failed');
            return redirect()->route('login')->with('error','Contraseña o usuario incorrectos');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {
        return redirect()->route('extras');
    }
}
