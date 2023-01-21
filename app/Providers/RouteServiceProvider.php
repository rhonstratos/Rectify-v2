<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->prefix('business')
                ->as('auth.r_business.')
                ->group(base_path('routes/auth-business.php'));

            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->prefix('client')
                ->as('auth.r_client.')
                ->group(base_path('routes/auth-client.php'));

            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->prefix('business')
                ->as('r_business.')
                ->group(base_path('routes/business.php'));

            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->as('r_client.')
                ->group(base_path('routes/client.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for ('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
