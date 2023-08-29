<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        // Ambil user saat ini
        $user = $request->user();

        // Periksa apakah user memiliki peran yang sesuai
        if ($user && $user->role == $role) {
            return $next($request);
        }

        // Jika user tidak memiliki peran yang sesuai, mungkin Anda ingin mengambil tindakan tertentu, seperti mengembalikan respons terlarang.
        return response('Unauthorized.', 401);
    }
}
