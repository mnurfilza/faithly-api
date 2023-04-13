<?php

namespace App\Repositories\Db;

use App\Interfaces\RoleRepositoryInterface;
use App\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{


    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;

    }

    public function getRoleByName(string $name)
    {
        return $this->role->where('name', '=', $name)->first();
    }
}
