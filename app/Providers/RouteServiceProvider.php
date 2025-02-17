<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'))
                ->group(base_path('routes/auth.php'));


            Route::middleware(['web', 'auth'])
                ->group(function () {
                    // Include the dashboard.php and core.php files
                    require base_path('routes/dashboard.php');
                    require base_path('routes/core.php');

                    // Get all PHP files from the 'core' directory and its subdirectories
                    $coreFiles = File::allFiles(base_path('routes/core'));

                    foreach ($coreFiles as $file) {
                        if ($file->getExtension() === 'php') {
                            require_once $file->getPathname();
                        }
                    }
                });
        });
    }
}
