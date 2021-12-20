<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->isAdmin) {
            return redirect('/');
        }

        return $next($request);
    }
}
