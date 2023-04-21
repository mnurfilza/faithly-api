<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\CouponRepositoryInterface;
use App\Interfaces\CouponUsecaseInterface;
use Illuminate\Http\Request;

class CouponUsecase implements CouponUsecaseInterface
{

    protected $coupon;
    public function __construct(CouponRepositoryInterface $coupon)
    {
        $this->coupon = $coupon;
    }

    public function listCoupon()
    {
        return ApiResponse::successResponse($this->coupon->listCoupon(),'Success Get List Message',200);
    }

    public function addCoupon(Request $request)
    {
        $resp = $this->coupon->addCoupon($request);
        return ApiResponse::successResponse($resp,'Success Add Data Coupon',200);
    }

    public function updateCoupon(Request $request)
    {
        $this->coupon->updateCoupon($request);
        return ApiResponse::successResponse($request,'Success Add Coupon', 200);
    }
}
