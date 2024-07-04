<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAssociationStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'association' && Auth::user()->association_statut !== 'active') {
            return redirect()->route('home')->withErrors(['Votre compte est inactif. Contactez l\'administrateur pour plus d\'informations.']);
        }

        return $next($request);
    }
}
