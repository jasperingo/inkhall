<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserIsLoggedIn
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
        
        if (auth()->check())
            return redirect()->route('index', ['locale'=> app()->getLocale()]);
        

        return $next($request);
    }
}



