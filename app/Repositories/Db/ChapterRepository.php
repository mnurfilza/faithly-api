<?php

namespace App\Repositories\Db;

use App\Interfaces\ChapterInterface;
use App\Models\chapters;

class ChapterRepository  implements ChapterInterface
{
    protected  $chaps;
    public function __construct(chapters $chaps)
    {
        $this->chaps = $chaps;
    }

    public function getChapter($data)
    {

        return $this->chaps
        ->query()
        ->join('book_names','chapters.book_id','=','book_names.book_id')
        ->where('chapters.book_id','=',$data['book_id'])
        ->get(['chapters.id as id',
        'chapters.book_id as book_id',
        'chapters.order as chapter_number',
        'book_names.name as name']);
        
    }
}

