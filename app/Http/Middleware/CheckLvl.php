<?php

namespace App\Http\Middleware;

use Closure;

class CheckLvl
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


        if (auth()->user()->level != 1) {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
