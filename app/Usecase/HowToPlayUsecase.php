<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\HowToPlayInterface;
use \App\Interfaces\HowToPlayUsecaseInterface;

class HowToPlayUsecase implements HowToPlayUsecaseInterface
{

    protected $htp;
    public function __construct(HowToPlayInterface $htp)
    {

        $this->htp = $htp;
    }
    public function getHowToPlay()
    {
        $res = $this->htp->getHowToPlay();
        return ApiResponse::successResponse($res, "Success Get Data", 200);
    }
}
