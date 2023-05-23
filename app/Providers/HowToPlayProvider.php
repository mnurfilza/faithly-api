<?php

namespace App\Providers;

use App\Interfaces\HowToPlayInterface;
use App\Interfaces\HowToPlayUsecaseInterface;
use App\Repositories\Db\HowToPlayRepository;
use App\Usecase\HowToPlayUsecase;
use Illuminate\Support\ServiceProvider;

class HowToPlayProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(HowToPlayInterface::class, HowToPlayRepository::class);
        $this->app->bind(HowToPlayUsecaseInterface::class, HowToPlayUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
