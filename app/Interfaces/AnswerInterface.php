<?php

namespace App\Interfaces;


interface AnswerInterface{

    public function ValidateAnswer($data);
    public function getAnswersQuestion($q_id);
}