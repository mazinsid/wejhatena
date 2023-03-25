<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() === null) {
            return response(trans('lang.user_not_found'), 404);
        }

        $actions = $request->route()->getAction();

        $role = isset($actions['role']) ? $actions['role'] : null;

        if ($request->user()->hasRole($role) || !$role) {
            return $next($request);
        }

        return response(trans('lang.unauthorized_access_area'), 404);
    }
}
