<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AppSession
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
        if(!Session::has('appName')){
            return redirect('apps');
        }
        if(Session::get('appName') == 'admin'){
            return redirect('/admin/dashboard');
        }
        return $next($request);
    }
}
