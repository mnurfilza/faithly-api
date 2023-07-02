<?php

namespace  App\Interfaces;


interface LevelInterface
{
    public function getLevelQuizByChapter($chapterId,$statusFilter);
    public function getDetailLevel($lvlid);
    public function getinitQuestion($lvlid);

}