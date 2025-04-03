<?php

namespace App\Providers;

use App\Services\User\UserInterface;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class ServiceRegistryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, UserService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
