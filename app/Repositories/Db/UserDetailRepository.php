<?php

namespace App\Repositories\Db;

use App\Interfaces\UserDetailRepoInterface;
use App\Models\UserDetail;

class UserDetailRepository implements UserDetailRepoInterface
{

    protected $userDetail;

    public function __construct(UserDetail $ud)
    {
        $this->userDetail = $ud;
    }

    public function Store($data)
    {
        $usd = $this->userDetail;
        return $usd->create([
            'user_id' => $data['user_id'],
            'parent_id' => $data['parent_id'],
            'fullname' => $data['fullname'],
            'phone_number' => $data['phone_number'],
            'year_of_birth' => $data['year_of_birth'],
            'org_id' => $data['org_id'],
            'subs_id' => $data['subs_id'],
            'role_id' => $data['role_id'],
        ]);
    }

    public function getUserDetailByUserId($id)
    {
        return $this->userDetail->where('user_id', $id)->first();
    }

    public function updateRole($data)
    {
        return $this->userDetail->where('user_id', $data['id'])->update(['role_id' => $data['role_id'], 'org_id' => $data['org_id']]);
    }

    public function checkUserByYear($data)
    {
        return $this->userDetail
            ->query()
            ->join('users', 'user_detail.user_id', '=', 'users.id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->join('role', 'role.id', '=', 'user_detail.role_id')
            ->where('user_detail.year_of_birth', '=', $data)->first(array('users.*', 'role.name as role', 'statuses.name as status'));
    }
}
