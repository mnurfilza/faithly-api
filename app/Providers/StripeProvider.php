<?php

namespace App\Providers;

use App\Interfaces\StripeInterface;
use App\Repositories\Stripe\StripeRepository;
use Illuminate\Support\ServiceProvider;

class StripeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(StripeInterface::class, StripeRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
