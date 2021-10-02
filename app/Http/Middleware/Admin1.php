<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin1
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
        if(Auth::check() && Auth::User()->level==2){
            return $next($request);
        }
        return redirect('/absensi');
    }
}
