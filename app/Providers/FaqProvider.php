<?php

namespace App\Providers;

use App\Interfaces\FaqInterface;
use App\Interfaces\FaqUsecaseInterface;
use App\Repositories\Db\FaqRepository;
use App\Usecase\FaqUsecase;
use Illuminate\Support\ServiceProvider;

class FaqProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->bind(FaqInterface::class, FaqRepository::class);
        $this->app->bind(FaqUsecaseInterface::class, FaqUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
