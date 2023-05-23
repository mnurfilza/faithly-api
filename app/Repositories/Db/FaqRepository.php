<?php

namespace App\Repositories\Db;
use App\Interfaces\FaqInterface;
use App\Models\Coupon;
use App\Models\FaqItemModel;
use App\Models\FaqModel;

class FaqRepository implements FaqInterface
{
    protected $faq;
protected $fq;
    public function __construct(FaqModel $faq, FaqItemModel $fq)
    {
        $this->faq = $faq;
        $this->fq = $fq;
    }

    public function getFaq()
    {

        return $this->faq
            ->query()
            ->get(['id','title','content']);

    }

    public function getFaqItem($data){
        return $this->fq->query()
            ->where('faq_id','=',$data)
            ->get();
    }
}
