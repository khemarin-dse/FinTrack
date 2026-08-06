<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // This is an API-only app with no login page, so never try to
        // redirect an unauthenticated request — always return a 401 JSON
        // response instead (handled by shouldRenderJsonWhen in bootstrap/app.php).
        Authenticate::redirectUsing(fn () => null);
    }
}
