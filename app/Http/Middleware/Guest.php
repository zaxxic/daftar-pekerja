<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('dashboard-admin');
            } elseif ($user->role == 'user') {
                return redirect()->route('dashboard-user');
            } 
        }
        return $next($request);
    }
}
