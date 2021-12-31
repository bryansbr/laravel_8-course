<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TypeUser
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
        if ($request->id == 123) {
            return $next($request);
        } else {
            return redirect('/');
            //
        }
    }
}
