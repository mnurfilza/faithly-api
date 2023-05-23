<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\TopicInterface;
use App\Interfaces\TopicUsecaseInterface;

class TopicUsecase implements TopicUsecaseInterface
{

    protected $topic;
    public function __construct(TopicInterface $topic)
    {
        $this->topic = $topic;
    }
    public function getTopics()
    {
        $resp = $this->topic->getTopics();
        return ApiResponse::successResponse($resp,"Success Get Topics",200);
    }
    
    public function getDetailTopic($data)
    {
        $resp = $this->topic->getDetailTopic(["topic_id"=> $data]);
        return ApiResponse::successResponse($resp,'Success Get Detail Topic',200);
    }
}
