<?php

namespace App\Providers;

use App\Interfaces\CardUsecaseInterface;
use App\Usecase\CardUsecase;
use Illuminate\Support\ServiceProvider;

class CardUsecaseProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CardUsecaseInterface::class, CardUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
