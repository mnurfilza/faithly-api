<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\FriendUsecaseInterface;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    //
    protected $friendUsecase;

    public function __construct(FriendUsecaseInterface $friendUsecase)
    {
        $this->friendUsecase = $friendUsecase;
    }


    public function AddFriend(Request $request)
    {
        try {

            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([

                'user_id' => 'required',

            ], $messages);
            $resp = $this->friendUsecase->addFriend(['user_id' => $request->input('user_id')]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;
    }

    public function ListFriend(Request $request)
    {
        try {
            $resp = $this->friendUsecase->listFriend([
                'perpage' => $request->query('perpage'),
                'page' => $request->query('page'),
                'search' => $request->query('search'),
                'sort_by' => $request->query('sort_by'),
                'order_by' => $request->query('order_by'),

            ]);
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }
        return $resp;
    }
}
