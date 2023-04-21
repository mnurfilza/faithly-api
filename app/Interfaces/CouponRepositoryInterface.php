<?php

namespace App\Interfaces;

interface CouponRepositoryInterface
{
    public  function addCoupon($data);
    public function  listCoupon();
    public function updateCoupon($data);
}
