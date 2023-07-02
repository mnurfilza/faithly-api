<?php

namespace App\Interfaces;


interface QuestionInterface
{
    public function getNextQuestion($data, $levelId);

    public function getHistoryQuestion($data);
}



interface QuestionUsecaseInterface{
    public function getNextQuestion($data);


}