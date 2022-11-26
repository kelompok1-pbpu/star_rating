<?php

namespace Kelompok1\StarRating;

use Illuminate\Support\ServiceProvider;

class RatingServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'star_rating');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }

    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->app->singleton('Kelompok1\StarRating\RatingContract', function($app) {
            return new StarRating();
        });
    }

    public function provides()
    {
        return ['Kelompok1\StarRating\RatingContract'];
    }
}

?>
