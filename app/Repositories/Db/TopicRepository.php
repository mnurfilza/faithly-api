<?php

namespace App\Repositories\Db;

use App\Interfaces\TopicInterface;
use App\Models\TopicModel;
use App\Models\TopicVersesModel;

class TopicRepository  implements TopicInterface
{
    protected $topic;
    protected $tpm;

    public function __construct(TopicModel $topic, TopicVersesModel $tpm)
    {
        $this->topic = $topic;
        $this->tpm = $tpm;
    }

    public function getTopics()
    {
        return  $this->topic->query()
        ->get();
    }
    
    public function getDetailTopic($data)
    {
        $query = $this->topic->query()
        ->join('topic_verses','topic_verses.topic_id','=','topic.id')
        ->leftJoin('verse_contents','verse_contents.id','=','topic_verses.verse_id')
        ->leftJoin('blog','blog.verse_id','=','verse_contents.id')
        ->join('verses','verses.id','=','verse_contents.verse_id')
        ->join('chapters','chapters.id','=','verses.chapter_id')
        ->join('book_names','book_names.book_id','=','chapters.book_id')
        ->where('topic_verses.topic_id','=',$data['topic_id'])
        ->selectRaw("verses.id,
        CONCAT(book_names.name, ' ', chapters.order, ':', verses.id) AS verse_reference,
        LTRIM(verse_contents.content) as content, blog.id as blog")
        ->get();


        return $query;


    }
}
