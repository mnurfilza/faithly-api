<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\UserInterface;
use App\Interfaces\UserUsecaseInterface;
use Illuminate\Http\Request;

class UserUsecase implements UserUsecaseInterface
{

    protected $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    //mobile API
    public function ListUser(Request $request)
    {
        //check only super admin can see this enpoint
        $roles = $this->userInterface->userRole(auth()->user()->id);
        if ($roles->role_type != 'super admin'){
            return ApiResponse::errorResponse("Unauthorized","",401);
        }
        $resp = $this->userInterface->ListUser([
            'perpage' => $request->query('perpage') ?? 10,
            'page' => $request->query('page') ?? 1,
            'search' => $request->query('search') ?? '',
            'sort_by' => $request->query('sort_by') ?? 'asc',
            'order_by' => $request->query('order_by') ?? 'fullname',
            'user_id'=>auth()->user()->id,
        ]);


        return ApiResponse::ResponsePaginate(
            $resp['data'],
            $request->query('perpage') ?? 10,
            $request->query('page') ?? 1,
            $resp['total'],
            '',
            'Success Retrieve Data',
            200,
        );
    }

    public function getProfileUser($id)
    {

        return ApiResponse::successResponse($this->userInterface->getProfileUser($id),
            "Success Get Profile",
            200);

    }
}
