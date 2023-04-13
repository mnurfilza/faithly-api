<?php

namespace App\Providers;

use App\Interfaces\UserUsecaseInterface;
use App\Usecase\User\AuthUsecase;
use App\Interfaces\AuthUsecaseInterface;
use App\Usecase\User\UserUsecase;
use Illuminate\Support\ServiceProvider;

class UserUsecaseProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(AuthUsecaseInterface::class, AuthUsecase::class);
        $this->app->bind(UserUsecaseInterface::class, UserUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
