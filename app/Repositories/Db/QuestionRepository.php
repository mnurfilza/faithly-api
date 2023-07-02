<?php

namespace App\Repositories\Db;

use App\Interfaces\QuestionInterface;
use App\Models\QuestionModel;

class QuestionRepository  implements QuestionInterface
{
    protected $q;

    public function __construct(QuestionModel $q)
    {
        $this->q = $q;
    }
    public function getNextQuestion($data, $levelId)
    {
        $query = $this->q->query();

        $query->where('level_id','=',$levelId);

       
        if (count($data) != 0) {
             $query->whereNotIn('id',$data);
        }
        
        $result = $query->first();

      
        return $result;
    }

    public function getHistoryQuestion($data)
    {
        $question =[];
        $query = $this->q->query()
        ->leftJoin('question_history','question_history.question_id','=','question.id')
        ->where('question.level_id','=',$data)
        ->selectRaw("question_history.*")
        ->get();

        foreach ($query as $key) {
            if ($key->question_id !="") {
                array_push($question,$key->question_id);
            }
           
        }  

        return $question;
    }

    

    
}
