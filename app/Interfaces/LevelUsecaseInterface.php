<?php
namespace  App\Interfaces;

interface LevelUsecaseInterface
{
    public function getLevelByChapter($chapterId,$statusFilter);
    public function getDetailLevel($lvlid);
    public function getInitQuiz($lvlid);
}