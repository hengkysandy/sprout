<?php

namespace App\Http\Middleware;

use Closure;

class CheckSales
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
        $role = $request->session()->get('userSession')[0]->role_id;
        if( $role !== 5 && $role !== 6) return back();
        return $next($request);
    }
}
