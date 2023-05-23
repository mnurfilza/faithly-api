<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\ChapterUsecaseInterface;
use App\Repositories\Db\ChapterRepository;

class ChapterUsecase implements ChapterUsecaseInterface
{

    protected $chap;
    public function __construct(ChapterRepository $chap)
    {
        $this->chap = $chap;
    }
    public function getChpaters($data)
    {

        $resp = $this->chap->getChapter(['book_id'=>$data['book_id']]);
        return ApiResponse::successResponse($resp,"Success Get Chapters",200);
    }
}
