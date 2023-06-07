<?php

namespace App\Repositories\Db;

use App\Interfaces\PaymentInterface;
use App\Models\Payment;

class PaymentRepository implements PaymentInterface
{

    protected $pay;
    public function __construct(Payment $pay)
    {
        $this->pay = $pay;
    }

    public function addPayment($data)
    {
        return $this->pay->create([
            'billing_id'=> $data['billing_id'],
            'coupon_id'=>$data['coupon_id'],
            'total'=> $data['total'],
            'payment_date'=> $data['payment_date'],
            'invoince_number'=> $data['invoice_number'],
        ]);
    }

    public function listPayment($data)
    {
        // TODO: Implement listPayment() method.
    }

    public function detailPayment($data)
    {
        // TODO: Implement detailPayment() method.
    }
}
