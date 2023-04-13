<?php

namespace App\Providers;

use App\Interfaces\FriendlistInterface;
use App\Interfaces\FriendUsecaseInterface;
use App\Repositories\Db\FriendRepository;
use App\Usecase\FriendListUsecase;
use Illuminate\Support\ServiceProvider;

class FriendlistProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(FriendlistInterface::class, FriendRepository::class);
        $this->app->bind(FriendUsecaseInterface::class, FriendListUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
