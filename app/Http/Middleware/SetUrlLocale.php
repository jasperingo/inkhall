<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetUrlLocale
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
        
        $l = explode("/", $request->path())[0];

        if (! in_array($l, ['en', 'es']))
            return redirect('en/'.$request->path());

        app()->setLocale($l);

        return $next($request);
    }
}


