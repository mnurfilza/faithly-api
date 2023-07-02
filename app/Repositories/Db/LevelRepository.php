<?php

namespace App\Repositories\Db;

use App\Interfaces\LevelInterface;
use App\Models\LevelModel;

class LevelRepository implements LevelInterface
{

    protected $lvl;

    public function __construct(LevelModel $lvl)
    {
        $this->lvl = $lvl;
    }
    public function getLevelQuizByChapter($chapterId,$statusFilter)
    {
        $query = $this->lvl->query()
        ->leftJoin('history_level','history_level.level_id','=','level.id')
        ->leftJoin('statuses','statuses.id','=','history_level.status_id')
        ->where('chapter_id','=',$chapterId)
        ->orderBy('level','ASC')
        ->selectRaw("level.*, COALESCE(statuses.name, 'Locked') AS status");

        
        
        if ($statusFilter == "Not Completed" ) {
            $query->where('statuses.name', '=', $statusFilter)
                ->orWhere('statuses.name','=','Unlocked')
                ->orWhereNull('statuses.name');
        } 
    
        if ($statusFilter == "Completed" ) {
            $query->where('statuses.name', '=', $statusFilter);
        } 

        $results = $query->get();
    
        return $results;
    }

    public function getDetailLevel($lvlid)
    {

        $query = $this->lvl->where('id','=',$lvlid)->first();
        return $query;

    
    }

    public function getinitQuestion($lvlid)
    {
        $query = $this->lvl->query()
            ->leftJoin('question','question.level_id','=','level.id')
            ->where('level.id','=',$lvlid)
            ->selectRaw("question.*, level.free_answer, level.general_refs, level.time_per_question")
            ->inRandomOrder()->first();

            return $query;
    }

}
