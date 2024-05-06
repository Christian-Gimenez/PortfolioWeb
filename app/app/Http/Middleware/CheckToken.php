<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $token = $request->session()->get('token');
        $urlToken = $request->get('token');

        if (!$token || $token !== $urlToken) {
            return redirect('/');
        }

        return $next($request);
    }
}
