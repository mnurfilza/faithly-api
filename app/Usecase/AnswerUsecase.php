<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\AnswerInterface;
use App\Interfaces\AnswerUsecaseInterface;
use App\Interfaces\HistoryQuestion;
use App\Interfaces\QuestionInterface;
use App\Interfaces\UserDetailRepoInterface;
use App\Interfaces\UserInterface;
use App\Interfaces\LevelInterface;

class AnswerUsecase  implements AnswerUsecaseInterface
{
    protected $ans;
    protected $q;
    protected $hq;
    protected $eloquentUser;
    protected $eloqUserDetail;
    protected $lvl;
    public function __construct(
        AnswerInterface $ans,
        QuestionInterface $q,
        HistoryQuestion $hq,
         UserInterface           $eloquentUser,
        UserDetailRepoInterface $eloqUserDetail,
        LevelInterface $lvl,
        )
    {
        $this->ans = $ans;
        $this->q = $q;
        $this->hq = $hq;
        $this->eloqUserDetail = $eloqUserDetail;
        $this->eloquentUser = $eloquentUser;
        $this->lvl = $lvl;


    }
    public function ValidateAnswer($data)
    {

        $userDetailId = $data['user_detail_id'];
        if ($userDetailId == "") {
            //create or register user first with detail
                 //save to user
        $user = $this->eloquentUser->storeUser([
            'username' => '',
            'email' => '',
            'year_of_birth' => '',
            'fullname' => '',
            'password' => '',

        ], "", 2);

        //save to user detail

        $userDetail = [
            'user_id' => $user->id,
            'fullname' => "",
            'phone_number' =>  "",
            'role_id' => 9,
            'parent_id' => 0,
            'org_id' => 0,
            'year_of_birth' =>"",
            'subs_id' => "",

        ];

        $detailResp = $this->eloqUserDetail->Store($userDetail);
            
        $userDetailId = $detailResp->id;
        }

        $isCorrect = $this->ans->ValidateAnswer($data["answer_id"]);

        if (!$isCorrect->isCorrect) {
        
            $this->hq->storeHistoryQuestion([
                'question_id'=>$isCorrect->question_id,
                'status_id'=> 19,
                'user_id'=> $userDetailId
            ]);
            return ApiResponse::successResponse([
                'next_question'=> $isCorrect->isCorrect,
                'answer_correct'=>$isCorrect->isCorrect,
            ],"Wrong Answer",200);
        }
        //store to history question
        $this->hq->storeHistoryQuestion([
            'question_id'=>$isCorrect->question_id,
            'status_id'=> 18
        ]);

        $history = $this->q->getHistoryQuestion($data['level_id']);
        $nextQ = $this->q->getNextQuestion($history,$data['level_id']);
        
        if ($nextQ->isEmpty()) {
            ApiResponse::errorResponse("Cannot Find Next Question","",404);
        }

        $level = $this->lvl->getDetailLevel($data['level_id']);
        if (count($history) == $level->questions) {
            
        }

        
        return ApiResponse::successResponse([
            "isCorrect"=> $isCorrect,
            "next_question"=>$nextQ->id,
            ""=>"",
            

        ],"Success Validate Answer", 200);

        //store to history question
    }

}
