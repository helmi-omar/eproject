<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if ( !$request->user()->roleAdmin() ) {
            return redirect('dashboard')->with('alert-success', 'Anda bukan admin');
        }

        return $next($request);
    }
}
