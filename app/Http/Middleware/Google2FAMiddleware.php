<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Google2FAMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->google2fa_secret) {
                if (!$request->session()->has('2fa_verified') || !$request->session()->get('2fa_verified')) {
                    return redirect()->route('2fa.verify');
                }
            }
        }

        return $next($request);
    }
}
