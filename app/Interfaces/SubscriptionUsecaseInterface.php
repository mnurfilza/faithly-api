<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface SubscriptionUsecaseInterface
{

    public function updateSubscription(Request $request);
    public function listSubs(Request $request);

}
