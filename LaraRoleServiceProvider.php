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

        $this->loadViewsFrom(__DIR__ . '/views', 'list');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/role/list')
        ]);

        $this->loadViewsFrom(__DIR__ . '/views', 'edit');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/role/edit')
        ]);

        $this->publishes([
            __DIR__ . '/config' => config_path()
        ]);

        $this->publishes([
            __DIR__ . '/migrations/2016_11_06_143945_create_role_group.php' => base_path('database/migrations/2016_11_06_143945_create_role_group.php'),
            __DIR__ . '/migrations/2016_11_06_144127_create_role_users.php' => base_path('database/migrations/2016_11_06_144127_create_role_users.php.php'),
        ], '');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/role.php', 'demo-config');
    }
}