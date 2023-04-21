<?php

namespace App\Http\Controllers\Api;
use App\Helper\ApiResponse;

use App\Http\Controllers\Controller;
use App\Interfaces\SubscriptionUsecaseInterface;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    protected $subs;
    public function __construct(SubscriptionUsecaseInterface $subs) {
        $this->subs = $subs;
    }


    public function updateSubscription(Request $request)
    {
        try {
            $resp = $this->subs->updateSubscription($request);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);
        }
        return ApiResponse::successResponse($resp, 'Success Update Subscription', 200);
    }

    public function listSubs(Request $request)
    {
        try {
            $resp = $this->subs->listSubs($request);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);
        }
        return ApiResponse::successResponse($resp, 'Success Update Subscription', 200);
    }
}
