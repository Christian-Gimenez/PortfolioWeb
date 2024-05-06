<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DesktopController extends Controller
{
    public function access(Request $request)
    {
        if ($request->has('guest_login')) {
            $token = Str::random(40);
            $request->session()->put('token', $token);
            return redirect('/desktop')->with('login', 'true');
        } elseif ($request->has('ok')) {
            // Aquí va tu lógica de verificación de usuario
        } else {
            return redirect('/')->with('login', 'error');
        }
    }

    public function showDesktop()
    {
        // Aquí va tu lógica para mostrar el escritorio
    }
}
