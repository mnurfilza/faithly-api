<?php

namespace App\Providers;

use App\Interfaces\CouponRepositoryInterface;
use App\Interfaces\CouponUsecaseInterface;
use App\Repositories\Db\CouponRepository;
use App\Usecase\CouponUsecase;
use Illuminate\Support\ServiceProvider;

class CouponProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CouponRepositoryInterface::class, CouponRepository::class);
        $this->app->bind(CouponUsecaseInterface::class, CouponUsecase::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
