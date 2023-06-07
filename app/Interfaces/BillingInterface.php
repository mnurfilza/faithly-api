<?php

namespace  App\Interfaces;


interface BillingInterface {
    public function CreateBilling($data);
    public function updateStatusBilling($data);
}