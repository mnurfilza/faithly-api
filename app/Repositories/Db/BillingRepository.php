<?php
namespace App\Repositories\Db;

use App\Interfaces\BillingInterface;
use App\Models\Billing;

class BillingRepository  implements BillingInterface
{
    protected $bill;
    public function __construct(Billing $bill)
    {
        $this->bill=$bill;
    }
    public function CreateBilling($data)
    {
        return $this->bill->create([
            'user_detail_id'=> $data['user_detail_id'],
            'is_autorenewal'=>$data['is_autorenewal'],
            'next_payment_date'=> $data['next_payment_date'],
            'status_id'=> $data['status_id']
        ]);

    }


    public function updateStatusBilling($data)
    {
        return $this->bill->where('id', $data['id'])->update(['status_id'=> $data['status_id']]) ;
    }
}
