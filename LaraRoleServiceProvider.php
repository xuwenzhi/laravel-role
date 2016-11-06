<?php

namespace Xuwenzhi\LaraRole;

use Illuminate\Support\ServiceProvider;

class LaraRoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Loading routes file
        require __DIR__ . '/routes.php';

        $this->loadViewsFrom(__DIR__ . '/views', 'demo-todo');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/demo-todo')
        ]);

        $this->publishes([
            __DIR__ . '/config' => config_path()
        ]);

        $this->publishes([
            __DIR__ . '/migrations/2016_08_30_100528_create_todos_table.php' => base_path('database/migrations/2016_08_30_100528_create_todos_table.php')
        ], '');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/demo-config.php', 'demo-config');
    }
}