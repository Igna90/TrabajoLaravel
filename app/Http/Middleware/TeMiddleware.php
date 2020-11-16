<?php

namespace App\Http\Middleware;

use Closure;

class TeMiddleware
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
        if (auth()->check() && (auth()->user()->type === 'te' || auth()->user()->type === 'ad')){
            return $next($request);
        }
        return redirect('/privilegios');
    }
}
