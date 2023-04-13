<?php

namespace App\Providers;

use App\Interfaces\UserDetailRepoInterface;
use App\Repositories\Db\UserDetail\UserDetailRepository;
use Illuminate\Support\ServiceProvider;

class UserDetailRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(UserDetailRepoInterface::class, UserDetailRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
