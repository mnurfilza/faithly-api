<?php

namespace App\Providers;

use App\Interfaces\ForgotPasswordInterface;
use App\Repositories\Db\ForgotPassword\ForgotPasswordRepository;
use Illuminate\Support\ServiceProvider;

class ForgotPasswordProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ForgotPasswordInterface::class, ForgotPasswordRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
