<?php

namespace Beem\Laravel;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class BeemServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/beem.php' => config_path('beem.php')
            ], 'beem-config');
        }
    }

    public function register()
    {
        $this->registerFacades();

        $this->registerRoutes();
    }

    private function registerFacades()
    {
        $this->app->singleton('Beem', fn ($app) => new \Beem\Laravel\Beem);

        $this->app->singleton('BeemRedirect', fn ($app) => new \Beem\Laravel\BeemRedirect);
    }

    private function registerRoutes()
    {
        $prefix = Beem::pathPrefix();

        Route::group(
            compact('prefix'),
            fn () => $this->loadRoutesFrom(__DIR__ . '/../routes/web.php')
        );
    }
}
