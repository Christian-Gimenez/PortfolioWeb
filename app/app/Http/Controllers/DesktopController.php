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
            return redirect('/desktop')->with('token', $token);
        } elseif ($request->has('ok')) {
            //Falta implementar
        } else {
            return redirect('/')->with('login', 'error');
        }
    }

    public function showDesktop(Request $request)
    {
        $first_login = $request->session()->get('first_login', true);
        $token = $request->session()->get('token');
        return view('desktop', ['first_login' => $first_login, 'token' => $token]);
    }
}
