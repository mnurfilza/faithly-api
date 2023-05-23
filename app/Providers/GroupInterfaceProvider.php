<?php

namespace App\Providers;

use App\Interfaces\GroupInterface;
use App\Interfaces\GroupMemberInterface;
use App\Interfaces\GroupUsecaseInterface;
use App\Repositories\Db\GroupMemberRepository;
use App\Repositories\Db\GroupRepository;
use App\Usecase\GroupUsecase;
use Illuminate\Support\ServiceProvider;

class GroupInterfaceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(GroupInterface::class, GroupRepository::class);
        $this->app->bind(GroupUsecaseInterface::class, GroupUsecase::class);
        $this->app->bind(GroupMemberInterface::class, GroupMemberRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
