<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
{
    $user_role = $request->user()->getRole();
    $roleArray = explode(',', $roles); // Ubah string jadi array

    if (in_array($user_role, $roleArray)) {
        return $next($request);
    }

    abort(403, 'Forbidden, kamu tidak punya akses ke halaman ini');
}

}
