<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class SuperAdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $role = auth()->user()->role_id;
        if($role==4){
            return $next($request);
        }else{
            return abort(403, 'No tienes permisos para acceder a esta página.');
        }

    }
}
