<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\RoleUsecaseInterface;

class RoleUsecase implements RoleUsecaseInterface
{

    protected  $role;
    public function __construct(RoleRepositoryInterface $role)
    {
        $this->role = $role;
    }

    public function getListRole()
    {
        return ApiResponse::successResponse($this->role->getListRole(),"Success get role",200);
    }
}
