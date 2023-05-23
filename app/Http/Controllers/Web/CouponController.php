<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\CouponUsecaseInterface;
use Illuminate\Http\Request;

class CouponController extends Controller
{

    protected $coupon;

    public function __construct(CouponUsecaseInterface $coupon)
    {
        $this->coupon = $coupon;
    }

    public function listCoupon()
    {

        try {
            $resp = $this->coupon->listCoupon();
            $obj = json_decode($resp->getContent());
            
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();
        }
        return view('super_admin.coupon_code', ['data' => $obj->data]);
    }

    public function addCoupon(Request $request)
    {
        try {
            $resp = $this->coupon->addCoupon($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();
        }

        return redirect('/showRegister')->with(['data', 'Success Login']);

    }


    public function updateCoupon(Request $request)
    {
        try {
            $resp = $this->coupon->updateCoupon($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();
        }

        return redirect('/showRegister')->with(['data', 'Success Login']);
    }
}


