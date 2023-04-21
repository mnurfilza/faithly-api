<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\SubscriptionInterface;
use App\Interfaces\SubscriptionUsecaseInterface;
use Illuminate\Http\Request;

class SubscriptionUsecase implements SubscriptionUsecaseInterface
{

    protected $subs;
     public function __construct(SubscriptionInterface $sub) {
        $this->subs = $sub;
    }
    public function updateSubscription(Request $request)
    {
       $this->subs->updateSubs($request);
        return ApiResponse::successResponse($request,'success update subscription');
    }

    public function listSubs(Request $request)
    {

        return ApiResponse::successResponse($this->subs->listSubscription($request['subs_type']),'success get list', 200);
    }

}
