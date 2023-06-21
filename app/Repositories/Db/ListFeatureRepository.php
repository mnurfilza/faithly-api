<?php

namespace App\Repositories\Db;

use App\Interfaces\ListFeatureInterface;
use App\Models\ListFeatureModel;

final class ListFeatureRepository  implements ListFeatureInterface
{

    protected $listFeature;
    public function __construct(ListFeatureModel $listFeature)
    {
        $this->listFeature=$listFeature;
    }
    public function GetsListFeatures($sub_id)
    {
        return $this->listFeature->query()->where('subscription_id','=',$sub_id)->get();
    }
}
