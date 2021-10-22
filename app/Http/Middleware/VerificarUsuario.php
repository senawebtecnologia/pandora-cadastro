<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerificarUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::user()) {

            if (Auth::user()->nivel == 0) {

                return redirect()->route('admin.dashboard');

            }else if (Auth::user()->nivel == 1) {
                
                return redirect()->route('user.dashboard');

            }
        }
        return $next($request);
    }
}
