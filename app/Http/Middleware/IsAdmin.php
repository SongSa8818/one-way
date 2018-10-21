<?php

namespace App\Http\Middleware;

use Illuminate\Http\RedirectResponse;
use Closure;

class IsAdmin
{
    protected function isAdmin($role)
    {
        return $role == 'Admin';
    }

    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->isAdmin())
        {
            return $next($request);
        }
        return new RedirectResponse(url('/'));
    }

}