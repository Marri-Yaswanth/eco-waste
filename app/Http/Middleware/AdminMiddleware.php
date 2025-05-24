<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        }

        // If not admin, redirect to home or login
        Auth::logout();
        return redirect()->route('admin.login')->withErrors(['email' => 'Unauthorized access. Admins only.']);
    }
}
