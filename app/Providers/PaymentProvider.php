<?php

namespace App\Providers;

use App\Interfaces\BillingInterface;
use App\Interfaces\PaymentInterface;
use App\Interfaces\PaymentUsecaseInterface;
use App\Repositories\Db\BillingRepository;
use App\Repositories\Db\PaymentRepository;
use App\Usecase\PaymentUsecase;
use Illuminate\Support\ServiceProvider;

class PaymentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentUsecaseInterface::class, PaymentUsecase::class);
        $this->app->bind(PaymentInterface::class, PaymentRepository::class);

        //billing

        $this->app->bind(BillingInterface::class, BillingRepository::class);
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
