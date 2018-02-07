<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\UnauthorizedException;

class IsAdminFilter
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (optional(auth()->user())->isAdmin) {
            return $next($request);
        }

        flash.error('Success denied');

        throw new UnauthorizedException('You must be an administrator to access this page');
    }
}
