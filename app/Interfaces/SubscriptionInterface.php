<?php

namespace App\Interfaces;

interface SubscriptionInterface
{
    public function addSubscription($data);
    public function listSubscription($data);

    public function updateSubs($data);
    public function getSubs($data);

}
