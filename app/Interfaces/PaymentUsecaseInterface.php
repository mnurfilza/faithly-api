<?php

namespace App\Interfaces;

interface PaymentUsecaseInterface
{
    public function addPayment($data);
    public function listPayment($data);

    public function detailPayment($data);
}
