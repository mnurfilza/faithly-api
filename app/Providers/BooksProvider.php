<?php

namespace App\Providers;

use App\Interfaces\BookInterface;
use App\Interfaces\BooksUsecaseInterface;
use App\Repositories\Db\BookRepository;
use App\Usecase\BooksUsecase as UsecaseBooksUsecase;
use Illuminate\Support\ServiceProvider;

class BooksProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->app->bind(BookInterface::class, BookRepository::class);
        $this->app->bind(BooksUsecaseInterface::class, UsecaseBooksUsecase::class);



    }
}
