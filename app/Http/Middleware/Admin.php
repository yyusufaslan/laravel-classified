<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Auth;
class Admin
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
        if (\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user() ->isAdmin())
        {
            return $next($request);
        }

        return redirect('home');
    }
}
