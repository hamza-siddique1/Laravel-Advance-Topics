<?php

namespace App\Providers;

use App\Contracts\PaymentGatewayInterface;
use App\Services\Payments\PaypalGateway;
use App\Services\Payments\StripeGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            PaymentGatewayInterface::class,
            StripeGateway::class
        );
    }
}
