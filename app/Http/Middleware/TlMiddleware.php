<?php

namespace App\Http\Middleware;

use Closure;

class TlMiddleware
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
        if (auth()->check() && auth()->user()->type === 'tl'){
            return $next($request);
        }
        return redirect('/privilegios');
    }
}
