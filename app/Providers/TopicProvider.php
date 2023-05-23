<?php

namespace App\Providers;

use App\Interfaces\TopicInterface;
use App\Interfaces\TopicUsecaseInterface;
use App\Repositories\Db\TopicRepository;
use App\Usecase\TopicUsecase;
use Illuminate\Support\ServiceProvider;

class TopicProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(TopicInterface::class, TopicRepository::class);
        $this->app->bind(TopicUsecaseInterface::class, TopicUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
