<?php

namespace App\Providers;

use App\Interfaces\UserInterface;
use App\Repositories\Db\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(UserInterface::class, UserRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
