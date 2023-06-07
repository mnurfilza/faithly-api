<?php

namespace App\Interfaces;



interface PaymentMethodInterface {
    public function createPaymentMethod($data);
    public function listPaymentMethod();
    public function getDetailPaymentMethod($id);
}