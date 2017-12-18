<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AuthMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (Session::get('login')) {
			return $next($request);
		}
		else {
			return redirect()->guest('login');
		}
	}
}
