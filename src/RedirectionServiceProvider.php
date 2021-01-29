<?php

namespace Kmlpandey77\Redirection;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RedirectionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'redirection');

        $this->publishes([
            __DIR__.'/../config/redirection.php' => config_path('redirection.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/redirection.php', 'redirection');

        // $this->app->bind('redirection', function($app) {
        //     return new Redirection();
        // });
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('redirection.prefix'),
            'middleware' => config('redirection.middleware'),
        ];
    }
}
