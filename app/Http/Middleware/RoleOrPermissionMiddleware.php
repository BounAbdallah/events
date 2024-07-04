<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleOrPermissionMiddleware
{
    public function handle(Request $request, Closure $next, $roleOrPermission)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        if (!Auth::user()->hasRole($roleOrPermission) && !Auth::user()->can($roleOrPermission)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
