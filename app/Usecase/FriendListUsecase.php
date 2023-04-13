<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\FriendlistInterface;
use App\Interfaces\FriendUsecaseInterface;

class FriendListUsecase implements FriendUsecaseInterface
{

    protected $friend;

    public function __construct(FriendlistInterface $friend)
    {
        $this->friend = $friend;
    }
    public function addFriend($data)
    {

        if (auth()->user()->id == $data['user_id']){
            return ApiResponse::errorResponse("Cannot Add Your Self As A Friend","",400);
        }
        //add to friend
        $this->friend->connectFriend([
            'user_id'=>auth()->user()->id,
            'friend_id'=>$data['user_id'],
            'status_id'=>1,
        ]);

        $this->friend->connectFriend([
            'user_id'=>$data['user_id'],
            'friend_id'=>auth()->user()->id,
            'status_id'=>1,
        ]);


        return ApiResponse::successResponse(['request_to'=>$data['user_id']],"Success Request Friend",200);
    }

    public function listFriend($data)
    {
        $resp = $this->friend->listFriend([
            'perpage' => $data['perpage'] ?? 10,
            'page' => $data['page'] ?? 1,
            'search' => $data['search'] ?? '',
            'sort_by' => $data['sort_by'] ?? 'asc',
            'order_by' => $data['order_by'] ?? 'status_id',
            'user_id' => auth()->user()->id,
        ]);


        return ApiResponse::ResponsePaginate(
            $resp['data'],
            $data['perpage'] ?? 10,
            $data['page'] ?? 1,
            $resp['total'],
            '',
            'Success Retrieve Data',
            200,
        );
    }

    public function dellFriend($data)
    {
        // TODO: Implement dellFriend() method.
    }
}
