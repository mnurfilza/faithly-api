<?php

namespace App\Providers;

use App\Interfaces\OrganizationInterface;
use App\Repositories\Db\OrganizationRepository;
use Illuminate\Support\ServiceProvider;

class OrganizationRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(OrganizationInterface::class, OrganizationRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
