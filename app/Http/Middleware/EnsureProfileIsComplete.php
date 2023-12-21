<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureProfileIsComplete
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && is_null(Auth::user()->profile)) {
            return redirect()->route('profile.create');
        }

        return $next($request);
    }
}
