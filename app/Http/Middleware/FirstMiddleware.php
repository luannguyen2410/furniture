<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class FirstMiddleware
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
        
        $value = $request->cookie('user');
        if($value) {
            return $next($request);
        }
        return  new Response(view('welcome'));
    }
}
