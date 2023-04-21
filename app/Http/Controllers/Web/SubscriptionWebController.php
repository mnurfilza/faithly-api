<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\SubscriptionUsecaseInterface;
use Illuminate\Http\Request;

class SubscriptionWebController extends Controller
{
    protected $subs;

    public function __construct(SubscriptionUsecaseInterface $subs)

    {
        $this->subs = $subs;
    }

    public function updateSubscription(Request $request)
    {

        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];
            $request->validate([
                'yearly_amount' => 'required',
                'monthly_amount' => 'required',
            ], $messages);

            $resp = $this->subs->updateSubscription($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();
        }
        session()->put('success', 'Success Input Price Subscription');
        return \redirect('admin/subscription');
    }

    public function listSubs(Request $request)
    {
        try {
            $resp = $this->subs->listSubs($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();
        }

        return view('super_admin.subscription', ['data' => $obj->data]);
    }
}
