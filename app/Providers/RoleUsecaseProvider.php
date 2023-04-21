<?php

namespace App\Providers;

use App\Interfaces\RoleUsecaseInterface;
use App\Usecase\RoleUsecase;
use Illuminate\Support\ServiceProvider;

class RoleUsecaseProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->bind(RoleUsecaseInterface::class, RoleUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
