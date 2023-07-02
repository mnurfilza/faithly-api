<?php

namespace App\Providers;

use App\Interfaces\AnswerInterface;
use App\Interfaces\AnswerUsecaseInterface;
use App\Interfaces\HistoryQuestion;
use App\Interfaces\LevelInterface;
use App\Interfaces\LevelUsecaseInterface;
use App\Interfaces\QuestionInterface;
use App\Interfaces\QuestionUsecaseInterface;
use App\Repositories\Db\AnswerRepository;
use App\Repositories\Db\HistoryQuestion as DbHistoryQuestion;
use App\Repositories\Db\LevelRepository;
use App\Repositories\Db\QuestionRepository;
use App\Usecase\AnswerUsecase;
use App\Usecase\LevelUsecase;
use Illuminate\Support\ServiceProvider;

class LevelProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->bind(LevelInterface::class, LevelRepository::class);
        $this->app->bind(LevelUsecaseInterface::class, LevelUsecase::class);
        $this->app->bind(AnswerInterface::class,AnswerRepository::class );
        $this->app->bind(AnswerUsecaseInterface::class, AnswerUsecase::class);
        $this->app->bind(QuestionInterface::class, QuestionRepository::class);
        $this->app->bind(HistoryQuestion::class, DbHistoryQuestion::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
