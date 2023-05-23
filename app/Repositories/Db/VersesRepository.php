<?php

namespace App\Repositories\Db;

use App\Interfaces\VersesInterface;
use App\Models\verses;

class VersesRepository implements VersesInterface
{
    protected $v;

    public function __construct(verses $v)
    {
        $this->v = $v;
    }

    public function getDetailVerses($data)
    {
        $query = $this->v->query()
        ->join('verse_contents', 'verse_contents.verse_id', '=', 'verses.id')
        ->join('chapters', 'chapters.id', '=', 'verses.chapter_id')
        ->join('book_names', 'book_names.book_id', '=', 'chapters.book_id')
        ->leftJoin('blog','blog.verse_id','=','verse_contents.id')
        ->selectRaw("verses.id,
        CONCAT(book_names.name, ' ', chapters.order, ':', verses.id) AS verse_reference,
        LTRIM(verse_contents.content) as content, blog.id as blog")
        ->get();
     
        return $query;
    }

   
}