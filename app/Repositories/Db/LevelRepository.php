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
    public function getLevelQuizByChapter($chapterId)
    {
        $query = $this->lvl->query()
        ->leftJoin('history_level','history_level.level_id','=','level.id')
        ->leftJoin('statuses','statuses.id','=','history_level.status_id')
        ->where('chapter_id','=',$chapterId)
        ->orderBy('level','ASC')
        ->selectRaw("level.*, COALESCE(statuses.name, 'Not Completed') AS status")
        ->get();

        return $query;
    }
}
