<?php
namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\BookInterface;
use App\Interfaces\BooksUsecaseInterface;

class BooksUsecase implements BooksUsecaseInterface
{
    
    protected $book;
     function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function getOldtestament()
    {
        $result = $this->book->oldTestamnet();
        return ApiResponse::successResponse($result,'Success Get Old Testament',200);
    }

    public function getNewTestament()
    {
        $result = $this->book->newTestament();
        return ApiResponse::successResponse($result,'Success Get New Testament',200); 
    }
    public function getDetailBooks($data)
    {
        
    }
}
