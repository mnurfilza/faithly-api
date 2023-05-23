<?php

namespace App\Repositories\Db;
use \App\Interfaces\BookInterface;
use App\Models\books;
use App\Models\User;

class BookRepository implements BookInterface
{

    protected $bookModel;

    public function __construct(books $books)
    {
        $this->bookModel = $books;
    }

    public function oldTestamnet()
    {

        $resp = $this->bookModel
            ->query()
            ->join('book_names','book_names.book_id','=','books.id')
            ->join('testaments','testaments.id','=','books.testament_id')
            ->join('testament_names','testament_names.testament_id','=','testaments.id')
            ->join('versions','versions.id','=','testament_names.version_id')
            ->where('testaments.id','=','1')
            ->get(array('book_names.*', 'versions.name as version','testament_names.name as testament'));
        
        return $resp;
    }

    public function newTestament()
    {
        return $this->bookModel
        ->query()
        ->join('book_names','book_names.book_id','=','books.id')
        ->join('testaments','testaments.id','=','books.testament_id')
        ->join('testament_names','testament_names.testament_id','=','testaments.id')
        ->join('versions','versions.id','=','testament_names.version_id')
        ->where('testaments.id','=','2')
        ->get(array('book_names.*', 'versions.name as version','testament_names.name as testament'));

    }

    public function chapters($data)
    {
        
    }

    public function verses($data)
    {
    }
    public function getDetailBook($data)
    {
        
    }
}
