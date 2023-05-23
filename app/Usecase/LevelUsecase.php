<?php
namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\LevelInterface;
use App\Interfaces\LevelUsecaseInterface;

class LevelUsecase implements LevelUsecaseInterface
{
    protected $lvl;

    public function __construct(LevelInterface $lvl)
    {
        $this->lvl = $lvl;
    }


    public function getLevelByChapter($chapterId)
    {
        $res = $this->lvl->getLevelQuizByChapter($chapterId);
        return ApiResponse::successResponse($res,'Success Get Level',200);
    }
}
