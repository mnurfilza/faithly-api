<?php

namespace App\Repositories\Db;

use App\Interfaces\HistoryQuestion as InterfacesHistoryQuestion;
use App\Interfaces\QuestionInterface;
use App\Models\QuestionHistoryModel;

class HistoryQuestion implements InterfacesHistoryQuestion
{
    protected $q;
    public function __construct(QuestionHistoryModel $q)
    {

        $this->q = $q;
        
    }

    public function getHistoryQuestion($data)
    {
    }
    
    public function storeHistoryQuestion($data)
    {
        
    }
}
