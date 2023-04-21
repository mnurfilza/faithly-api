<?php

namespace App\Repositories\Db;

use App\Interfaces\CouponRepositoryInterface;
use App\Models\Coupon;

class CouponRepository implements CouponRepositoryInterface
{

    protected $coupon;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function addCoupon($data)
    {
        return $this->coupon->create([
            'name' => $data['name'],
            'disc' => $data['disc'],
            'coupon_code' => $data['coupon_code'],
            'exp_date'=>$data['exp_date'],
        ]);
    }

    public function listCoupon()
    {
        return $this->coupon->get();
    }

    public function updateCoupon($data)
    {
        return $this->coupon->where('id', $data['id'])->update([
            'disc' => $data['disc'],
            'coupon_code' => $data['coupon_code'],
            'exp_date'=>$data['exp_date'],
        ]);
    }
}
