<?php

namespace App\Repositories\Db;
use App\Interfaces\HowToPlayInterface;
use App\Models\HowToPlayModel;

class HowToPlayRepository implements HowToPlayInterface
{

    protected $htp;
    public function __construct(HowToPlayModel $htp)
    {
        $this->htp = $htp;
    }

    public function getHowToPlay()
    {
        return $this->htp->query()->get();

    }
}
