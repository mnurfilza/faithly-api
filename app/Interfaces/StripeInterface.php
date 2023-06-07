<?php

namespace App\Interfaces;



interface StripeInterface {
    public function PaymentIntent($data);
    public function addCardToStripe($data);
}