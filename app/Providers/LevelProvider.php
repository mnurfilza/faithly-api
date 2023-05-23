<?php

namespace App\Providers;

use App\Interfaces\LevelInterface;
use App\Interfaces\LevelUsecaseInterface;
use App\Repositories\Db\LevelRepository;
use App\Usecase\LevelUsecase;
use Illuminate\Support\ServiceProvider;

class LevelProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->bind(LevelInterface::class, LevelRepository::class);
        $this->app->bind(LevelUsecaseInterface::class, LevelUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
