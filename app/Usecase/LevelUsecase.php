<?php
namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\AnswerInterface;
use App\Interfaces\HistoryLevelInterface;
use App\Interfaces\LevelInterface;
use App\Interfaces\LevelUsecaseInterface;

class LevelUsecase implements LevelUsecaseInterface
{
    protected $lvl;

    protected $ans;
    protected $historyLevel;
    public function __construct(LevelInterface $lvl, AnswerInterface $ans,HistoryLevelInterface $history)
    {
        $this->lvl = $lvl;
        $this->ans = $ans;
        $this->historyLevel = $history;
    }


    public function getLevelByChapter($chapterId,$statusFilter)
    {
        $res = $this->lvl->getLevelQuizByChapter($chapterId,$statusFilter);
        return ApiResponse::successResponse($res,'Success Get Level',200);
    }

    public function getDetailLevel($lvlid)
    {
            $res = $this->lvl->getDetailLevel($lvlid);

            return ApiResponse::successResponse($res,"succes get detail level",200);
    }


    public function getInitQuiz($lvlid)
    {



             $res = $this->lvl->getinitQuestion($lvlid);
             $ans = $this->ans->getAnswersQuestion($res->id);
             
             $res->answer = $ans;

            

            return ApiResponse::successResponse($res,"succes get detail level",200);
    }

}
