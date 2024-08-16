<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VagaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->tipo === 'empresa'){
        return $next($request);
        }


        // Se não for uma empresa, redireciona com uma mensagem de erro
        return redirect()->route('')->
        withErrors(['access' => 'Você não tem permissão para acessar
        essa área.']);




    }
}


// middleware de escopo local
