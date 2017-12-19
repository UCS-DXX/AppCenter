<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMiddleWare
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
		if (Session::get('login') && Session::get('admin')) {
			return $next($request);
		}
		else {
			return redirect()->guest('admin/login');
		}
	}
}
