<?php

namespace App\Interfaces;

interface PaymentInterface
{

    public function addPayment($data);
    public function listPayment($data);
    public function detailPayment($data);
}
