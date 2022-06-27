<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JuridicoAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() and auth()->user()->juridico){

            return $next($request);
        }
        return redirect('/dashboard')->with('msg','Url não encontrada');
    }
}
