<?php

namespace App\Repositories\Db;
use \App\Interfaces\SubscriptionInterface;
use App\Models\Role;
use App\Models\Subscription;

class SubscriptionRepository implements SubscriptionInterface
{

    protected $subs;

    public function __construct(Subscription $subs)
    {
        $this->subs = $subs;

    }

    public function addSubscription($data)
    {
        return $this->subs->create([
            'subs_type_id'=> $data['subs_type'],
            'name' => $data['name'],
            'monthly_amount' => $data['monthly_amount'],
            'yearly_amount' => $data['yearly_amount']
        ]);
    }

    public function listSubscription($data)
    {

        $res = $this->subs->get();
        if ($data == "monthly")
        {
            return $res->makeHidden(['yearly_amount']);
        }else if ($data == "yearly"){
            return $res->makeHidden(['monthly_amount']);
        }
        return $res;

    }

    public function updateSubs($data)
    {
        return $this->subs->where('id',$data['id'])->update([
            'monthly_amount'=> $data['monthly_amount'],
            'yearly_amount'=> $data['yearly_amount'],'users'=>$data['users']]);
    }
}
