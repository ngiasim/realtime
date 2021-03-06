<?php

namespace Ngiasim\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/ngiasim/timezones'),
        ]);

        $this->publishes([
        __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

        $this->publishes([
        __DIR__ . '/seeds' => $this->app->databasePath() . '/seeds'
        ], 'seeds');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Ngiasim\Timezones\TimezonesController');
    }
}
