<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            if (Auth::user()->admin) {

                return $next($request);

            } else {

                return redirect('/products')->with('message', 'Acesso negado! Você precisa de credencias de admin para acessar as informações.');

            }

        } else {
                return redirect('/login')->with('message', 'Entre para acessar as informações.');
        }

        return $next($request);
    }
}
