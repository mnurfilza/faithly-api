<?php

namespace App\Providers;

use App\Interfaces\VersesInterface;
use App\Interfaces\VersesUsecaseInterface;
use App\Repositories\Db\VersesRepository;
use App\Usecase\VersesUsecase;
use Illuminate\Support\ServiceProvider;

class VersesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(VersesInterface::class, VersesRepository::class);
        $this->app->bind(VersesUsecaseInterface::class,VersesUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
