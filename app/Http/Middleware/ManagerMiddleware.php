<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ManagerMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->user() !== null) {
            $role = Auth::guard($guard)->user()->role;
            if ($role == 2) {
                return $next($request);
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
}
