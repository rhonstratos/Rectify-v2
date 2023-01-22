<?php

namespace App\Http\Middleware\Authenticate;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Client extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        $user = Auth::user();

        if ($user->type == $user::TYPES['BUSINESS']) {
            Auth::logout();
            return redirect()->route('login');
        }

        return $next($request);
    }
}
