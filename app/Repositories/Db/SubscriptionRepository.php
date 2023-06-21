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

        $res = $this->subs->query()
        ->join('subscription_type',
            'subscription.subscription_type',
            '=',
            'subscription_type.id')
            ->leftJoin('list_feature','subscription.id','=','list_feature.subscription_id');
        if ($data == "monthly")
        {
             $res->where('subscription_type.name','=','Monthly');
        } else if ($data == "yearly"){
             $res->where('subscription_type.name','=','Yearly');
        }


        $result = $res->get(array('subscription.*','list_feature.feature as feature'));
        $data = [];
        $processedItems = [];
        $features = [];
        foreach ($result as $item) {
            if (in_array($item->id, $processedItems)) {
                array_push($data[count($data) - 1]['feature'] , $item->feature);
                continue;
            }
    
            $data[] = [
                'id' => $item->id,
                'name' => $item->name,
                'users' => $item->users,
                'price' => $item->price,
                'feature' => array_filter([$item->feature]),
            ];

            array_push($features, $item->feature);
            $processedItems[] = $item->id;

        }

        



        return $data;

    }

    public function updateSubs($data)
    {
        return $this->subs->where('id',$data['id'])->update([
            'monthly_amount'=> $data['monthly_amount'],
            'yearly_amount'=> $data['yearly_amount'],'users'=>$data['users']]);
    }

    public function getSubs($data)
    {

        return $this->subs->query()->join('subscription_type',
        'subscription.subscription_type',
        '=',
        'subscription_type.id')->
        where('subscription.id','=',$data)->
        first(array('subscription.*','subscription_type.name as subs_type'));
    }
}
