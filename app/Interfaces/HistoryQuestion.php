<?php

namespace App\Interfaces;



interface HistoryQuestion
{
    public function getHistoryQuestion($data);
    public function storeHistoryQuestion($data);
}