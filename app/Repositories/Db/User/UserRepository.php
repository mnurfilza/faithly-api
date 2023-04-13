<?php

namespace App\Repositories\Db\User;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserRepository implements UserInterface
{


    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function storeUser($data)
    {
        return $this->userModel->create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status_id' => 1,
        ]);
    }


    public function checkEmail($email): bool
    {
        if ($this->userModel->where('email', '=', $email)->count() > 0) {
            return true;
        }
        return false;
    }

    public function getuserByEmail($email)
    {
        return $this->userModel->where('email', $email)->first();
    }

    public function ListUser($data)
    {
        $query = $this->userModel
            ->query()
            ->join('user_detail', 'users.id', '=', 'user_detail.user_id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->join('role', 'user_detail.role_id', '=', 'role.id');

        if ($data['search'] !== "") {
            $query
                ->whereRaw("user_detail.fullname LIKE '%" . $data['search'] . "%' OR phone_number LIKE `%" . $data['search'] . "%'");
        }
        $query->orderBy($data['order_by'], $data['sort_by']);

        $result = $query
            ->offset(($data['page'] - 1) * $data['perpage'])
            ->limit($data['perpage'])
            ->get(array('users.*',
                'statuses.name as status',
                'user_detail.phone_number as phone_number',
                'user_detail.fullname as fullname',
                'role.name as role_type'));
        $total = $query->count();


        return [
            'data' => $result,
            'total' => $total,
        ];
    }

    public function updatePassAndStatus($data)
    {
        $resp = $this->getuserByEmail($data['email']);
        $resp->status_id = 3;
        $resp->passowrd = $data['password'];

        return $resp->save();
    }

    public function userRole($data)
    {
        $query = $this->userModel
            ->query()
            ->join('user_detail', 'users.id', '=', 'user_detail.user_id')
            ->join('role', 'user_detail.role_id', '=', 'role.id')
            ->where('users.id', '=', $data)
            ->first(array('users.*',
                'user_detail.phone_number as phone_number',
                'user_detail.fullname as fullname',
                'role.name as role_type'));
        return $query;
    }

    public function getProfileUser($data)
    {
        $query = $this->userModel
            ->query()
            ->join('user_detail', 'users.id', '=', 'user_detail.user_id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->join('role', 'user_detail.role_id', '=', 'role.id')
            ->where('users.id', '=', $data)
            ->first(array('users.*',
                'statuses.name as status',
                'user_detail.phone_number as phone_number',
                'user_detail.fullname as fullname',
                'role.name as role_type'));

        return $query;
    }
}


