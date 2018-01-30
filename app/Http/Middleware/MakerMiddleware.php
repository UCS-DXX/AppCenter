<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class MakerMiddleware
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
        if (Session::get('maker') == 1) {
            return $next($request);
        }
        else{
            return redirect('dashboard');
        }
    }
}
