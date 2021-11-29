<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        //só será autorizado se usuario ter o email igual ao que foi foi declarado
        if (auth()->user()->email == "luiz@luihz.luiz") {
            return $next($request);
        } else {
            return redirect('nao-autorizado');
        }
    }
}
