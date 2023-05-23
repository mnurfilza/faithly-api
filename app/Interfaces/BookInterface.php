<?php

namespace App\Interfaces;

interface BookInterface
{
    public function oldTestamnet();
    public function newTestament();
    public function chapters($data);
    public function verses($data);
    public function getDetailBook($data);
}
