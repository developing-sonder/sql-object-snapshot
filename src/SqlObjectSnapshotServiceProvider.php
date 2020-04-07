<?php

namespace DevelopingSonder\SqlObjectSnapshot;

use Illuminate\Support\ServiceProvider;

class SqlObjectSnapshotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sql-object-snapshot');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'sql-object-snapshot');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('sql-object-snapshot.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/sql-object-snapshot'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/sql-object-snapshot'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/sql-object-snapshot'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'sql-object-snapshot');

        // Register the main class to use with the facade
        $this->app->singleton('sql-object-snapshot', function () {
            return new SqlObjectSnapshot;
        });
    }
}
