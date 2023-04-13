<?php

namespace App\Http\Controllers\Api;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use App\Interfaces\UserUsecaseInterface;
use Illuminate\Http\Request;

class User extends Controller
{
     protected $user;

        public function __construct(UserUsecaseInterface $user)

        {

            $this->user = $user;
        }

    public function listUser(Request $request)
    {

        try {
            $resp = $this->user->ListUser($request);
        }catch (\Throwable $th)
        {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;

    }

    public function getProfileUser($id)
    {
        try {
            $resp = $this->user->getProfileUser($id);
        }catch (\Throwable $th)
        {
            return ApiResponse::errorResponse('', $th->getMessage(), 500);

        }

        return $resp;
    }
}
