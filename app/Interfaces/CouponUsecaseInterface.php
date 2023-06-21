<?php
namespace App\Interfaces;


use Illuminate\Http\Request;

interface CouponUsecaseInterface {

    public function listCoupon();
    public function addCoupon(Request $request);
    public function updateCoupon(Request $request);
    public function couponInquiry($data);

}
