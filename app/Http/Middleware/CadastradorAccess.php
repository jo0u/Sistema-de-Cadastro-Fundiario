<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CadastradorAccess
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
        if(auth()->check() and auth()->user()->cadastrador){

            return $next($request);
        }

        return redirect('/dashboard')->with('msg','Url não encontrada');

        
    }
}
