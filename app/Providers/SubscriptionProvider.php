<?php

namespace App\Providers;

use App\Interfaces\SubscriptionInterface;
use App\Interfaces\SubscriptionUsecaseInterface;
use App\Repositories\Db\SubscriptionRepository;
use App\Usecase\SubscriptionUsecase;
use Illuminate\Support\ServiceProvider;

class SubscriptionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SubscriptionInterface::class, SubscriptionRepository::class);
        $this->app->bind(SubscriptionUsecaseInterface::class, SubscriptionUsecase::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
