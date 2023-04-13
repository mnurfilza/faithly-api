<?php

namespace App\Providers;

use App\Interfaces\RoleRepositoryInterface;
use App\Repositories\Db\RoleRepository;
use Illuminate\Support\ServiceProvider;

class RoleRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
