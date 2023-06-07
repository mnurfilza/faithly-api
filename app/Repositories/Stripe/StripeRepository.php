<?php


namespace App\Repositories\Stripe;

use App\Interfaces\StripeInterface;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class StripeRepository implements StripeInterface
{
    
    protected $stripe;
    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_API_KEY'));
    }
    public function PaymentIntent($data)
    {
        $paymentIntent = $this->stripe->paymentIntents->create([
            'amount'=> $data['amount'],
            'currency'=>'usd',
            'payment_method_types' => ['card'],
            'confirm' => true,
            'confirmation_method' => 'automatic', // Konfirmasi otomatis
            'payment_method'=>$data['payment_method']
        ]);

        return $paymentIntent->toArray();

        
    }
    public function addCardToStripe($data)
    {
        $card = $this->stripe->paymentMethods->create([
            'type' => 'card',
            'card' => [
              'number' => $data['number'],
              'exp_month' => $data['exp_month'],
              'exp_year' => $data['exp_year'],
              'cvc' => $data['cvc'],
            ],
          ]);

          return $card->toArray();
    }
}
