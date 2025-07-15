<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        $this->routes(function () {
            // ✅ This loads the API routes (with prefix 'api')
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // ✅ This loads the web routes
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
