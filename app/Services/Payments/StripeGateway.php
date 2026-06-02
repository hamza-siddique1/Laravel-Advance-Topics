<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGatewayInterface;
use Illuminate\Support\Facades\Log;

class StripeGateway implements PaymentGatewayInterface
{
    public function charge(float $amount): bool
    {
        Log::info('Charged via Stripe');
        return true;
    }
}
