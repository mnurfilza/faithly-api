<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\SubscriptionUsecaseInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    protected $payment;

    public function __construct(SubscriptionUsecaseInterface $payment)
    {
        $this->payment = $payment;
    }


    public function PaymentInit()
    {

        //for yearly
        $resp1 = $this->payment->listSubs(['subs_type'=>'yearly']);
        $obj1 = json_decode($resp1->getContent());

        //for monthly
        $resp2 = $this->payment->listSubs(['subs_type'=>'monthly']);
        $obj2 = json_decode($resp2->getContent());

    
        return view('payment_init', ['yearly'=> $obj1->data, 'monthly'=>$obj2->data]);
    }

    public function contribute(Request $request)
    {
        try {
            $resp = $this->payment->contribute($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                return back()->withErrors(['errors', $obj->meta->response_message]);
            }
        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back();        
        }
        

    }
}