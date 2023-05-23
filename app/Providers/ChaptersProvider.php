<?php

namespace App\Providers;

use App\Interfaces\ChapterInterface;
use App\Interfaces\ChapterUsecaseInterface;
use App\Repositories\Db\ChapterRepository;
use App\Usecase\ChapterUsecase;
use Illuminate\Support\ServiceProvider;

class ChaptersProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ChapterInterface::class,ChapterRepository::class);
        $this->app->bind(ChapterUsecaseInterface::class,ChapterUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
