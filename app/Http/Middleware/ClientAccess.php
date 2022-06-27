<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientAccess
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
        if(auth()->check() and auth()->user()->client){

            return $next($request);
        }

        return redirect('/dashboard')->with('msg','Url não encontrada');
       
    
    }
}
