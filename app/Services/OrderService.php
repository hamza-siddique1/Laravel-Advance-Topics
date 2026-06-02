<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class OrderService
{
    public function __construct(
        protected PaymentGatewayInterface $paymentGateway
    ) {
    }

    public function placeOrder(float $amount): bool
    {
        return $this->paymentGateway->charge($amount);
    }
}
