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
        
        if (Auth::check() && Auth::user()->access === 0) {
            return $next($request);
        }
        
        if(Auth::check() && Auth::user()->access === 1){
            return redirect()->route('auth.pageLogin');
        }

        return redirect()->back();
        
    }
    
}
