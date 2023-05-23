<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\FaqInterface;
use App\Interfaces\FaqUsecaseInterface;

class FaqUsecase implements FaqUsecaseInterface
{

    protected $faq;

    public function __construct(FaqInterface $faq)
    {
        $this->faq = $faq;
    }

    public function getFaq()
    {
        $id = 0;
        $title = '';
        $content = '';
        $res = $this->faq->getFaq();
        foreach ($res as $r)
        {
            $id = $r->id;
            $content = $r->content;
            $title = $r->title;
        }

        $item = $this->faq->getFaqItem($id);

        return ApiResponse::successResponse([
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'item' => $item
        ], 'Success Get Faq', 200);
    }
}
