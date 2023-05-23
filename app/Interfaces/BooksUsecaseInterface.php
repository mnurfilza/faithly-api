<?php

namespace  App\Interfaces;


interface BooksUsecaseInterface{

    public function getOldtestament();
    public function getNewTestament();

    public function getDetailBooks($data);
}