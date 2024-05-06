<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WindowController extends Controller
{
    public function showLogin()
    {
        $windowTitle = 'Welcome to Christian-Gimenez\'s PortfolioWeb';
        $iconImg = './win95-icons/png/user_computer-1.png';
        $content = view('loginForm')->render();

        return view('login')
            ->with('windowTitle', $windowTitle)
            ->with('iconImg', $iconImg)
            ->with('content', $content);
    }
}
