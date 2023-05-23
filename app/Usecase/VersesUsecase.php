<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\VersesInterface;
use App\Interfaces\VersesUsecaseInterface;

class VersesUsecase implements VersesUsecaseInterface
{

    protected $v;
    public function __construct(VersesInterface $v)
    {
        $this->v = $v;
        
    }

    public function getDetailVerses($data)
    {
        $res = $this->v->getDetailVerses(['topic_id'=>""]);
        return ApiResponse::successResponse($res,"sukses",200);
    }


}
