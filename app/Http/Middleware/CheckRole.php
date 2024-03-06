<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Harap login terlebih dahulu');
        }
        if (auth()->user()->role === $role) {
            return $next($request);
        }
        abort(403, 'Maaf anda bukan '. $role);
    }
}
