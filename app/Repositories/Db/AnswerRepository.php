<?php

namespace App\Repositories\Db;

use App\Interfaces\AnswerInterface;
use App\Models\AnswerModel;

class AnswerRepository implements AnswerInterface
{

    protected $ans;
    public function __construct(AnswerModel $ans)
    {
        $this->ans = $ans;
    }
    public function ValidateAnswer($data)
    {
        $answer = $this->ans->where('id', '=', $data)->first();
        return $answer;
    }

    public function getAnswersQuestion($q_id)
    {
        $answers = $this->ans->where('question_id', '=', $q_id)->get();

        $transformedAnswers = $answers->map(function ($answer) {
            return [
                'id' => $answer->id,
                'answer' => $answer->answer,
                'question_id' => $answer->question_id,
            ];
        });

    return $transformedAnswers;
    }
    
}
