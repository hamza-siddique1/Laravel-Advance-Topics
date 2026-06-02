<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGatewayInterface;
use Illuminate\Support\Facades\Log;

class PaypalGateway implements PaymentGatewayInterface
{
    public function charge(float $amount): bool
    {
        Log::info('Charged via Paypal');
        return true;
    }
}
