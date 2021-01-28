<?php

namespace Lotusnp\Starter;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RedirectionServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->registerRoutes();
    }

    // public function register()
    // {
    //     $this->app->bind('redirection', function($app) {
    //         return new Redirection();
    //     });
    // }



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
