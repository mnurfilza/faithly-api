<?php

namespace App\Providers;

use App\Interfaces\CardRepositoryInterface;
use App\Repositories\Db\CardRepository;
use Illuminate\Support\ServiceProvider;

class CardRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CardRepositoryInterface::class, CardRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
