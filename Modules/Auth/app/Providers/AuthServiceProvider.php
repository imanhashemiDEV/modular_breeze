<?php

namespace Modules\Auth\app\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Auth\app\View\Components\AppLayout;
use Modules\Auth\app\View\Components\GuestLayout;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/auth.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views/','Auth');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/0001_01_01_000000_create_users_table.php');
        $this->loadViewComponentsAs('Auth',[
         GuestLayout::class,
          AppLayout::class
        ]);
    }

}
