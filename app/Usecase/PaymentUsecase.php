<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\BillingInterface;
use App\Interfaces\PaymentInterface;
use App\Interfaces\PaymentUsecaseInterface;
use App\Interfaces\StripeInterface;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PaymentUsecase implements PaymentUsecaseInterface
{
    protected $pay;
    protected $bill;
    protected $stripe;
    public function __construct(PaymentInterface $pay,BillingInterface $bill, StripeInterface $stripe)
    {
        $this->pay = $pay;
        $this->bill=$bill;
        $this->stripe = $stripe;
    }
    public function addPayment($data)
    {
        //check next payment date for billing
       

        $total = $data['amount'] + $data['disc'];
        $randNumb = Str::randomNumber(3);
        $now = Carbon::now();

        $inv = 'INV-'.$randNumb.$now->format('dmy');
        //create billing for now
        $billing = $this->bill->CreateBilling([
            'user_detail_id'=> $data['user_detail_id'],
            'next_payment_date'=> Carbon::now(),
            'status_id'=> 7
        ]);

        //create billing for next payment
        $nextPayment =$this->bill->CreateBilling([
            'user_detail_id'=> $data['user_detail_id'],
            'is_autorenewal'=>$data['is_autorenewal'],
            'next_payment_date'=> $data['next_payment_date'],
            'status_id'=> 7
        ]);

        //payment integrate to stripe

        $paid = $this->stripe->PaymentIntent([
            'amount'=>$total,
            'payment_method'=> $data['card']
        ]);


        if ($paid['status'] == 'succeeded') {
         //update billing status to paid
         $billingStat = 5;
         //create payment for current transaction
         $this->pay->addPayment([
          'billing_id' => $billing['id'],
          'total' => $total,
          'price_subscription' => $data['amount'],
          'payment_data'=> Carbon::now(),
          'invoice_number'=> $inv
         ]);  

        }
        
        $this->bill->updateStatusBilling([
            'id'=> $billing['id'],
            'status_id' => $billingStat
        ]);


        return ApiResponse::successResponse([
            'status' => $paid['status']
        ],"success payment",200);
        
    }

    public function listPayment($data)
    {
        
    }

    public function detailPayment($data)
    {

    }
    

}
