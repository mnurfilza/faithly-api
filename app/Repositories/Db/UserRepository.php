<?php

namespace App\Repositories\Db;

use App\Interfaces\UserInterface;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class UserRepository implements UserInterface
{


    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function storeUser($data, $activationToken, $status)
    {
        
        
        return $this->userModel->create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status_id' => $status,
            'activation_token' => $activationToken,
        ]);
    }


    public function checkEmail($data): bool
    {
        if ($this->userModel->where('email', '=', $data['email'])
        ->orWhere('username','=',$data['username'])
        ->count() > 0) {
            return true;
        }
        return false;
    }



    public function getuserByEmail($email)
    {
        return $this->userModel
            ->query()
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->where('email', $email)->orWhere('username', $email)->first(array('users.*', 'statuses.name as status'));
    }

    public function ListUser($data)
    {
        $query = $this->userModel
            ->query()
            ->join('user_detail', 'users.id', '=', 'user_detail.user_id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->join('role', 'user_detail.role_id', '=', 'role.id');


        if ($data['user_id'] !== 0) {
            $query->whereNot('users.id', '=', $data['user_id']);
        }
        if($data['isAdminSide'] ===true){
            $query->whereNot('role.name', '=','Super Admin')->whereNot('role.name','=','Admin');

        }
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


    public function updateActivationTOken($data)
    {
        return $this->userModel->where('id', $data)->update(['activation_token_used' => true]);
    }

    public function getUserByTokenActivation($data)
    {
        return $this->userModel->where('activation_token', $data)->first();
    }

    public function verifiedUser($data)
    {
        return $this->userModel->where('id', $data)->update(['email_verified_at' => Carbon::now(), 'status_id' => 2]);
    }

    public function getLisChild($data)
    {
        $query = $this->userModel
            ->query()
            ->join('user_detail', 'users.id', '=', 'user_detail.user_id')
            ->join('role', 'user_detail.role_id', '=', 'role.id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->where('role.name','=','Child');

        if ($data['parent_id'] !== ""){
            $query = $query->orWhere('user_detail.parent_id','=');
        }

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

    public function getListAdmin($data)
    {
        $query = $this->userModel
            ->query()
            ->join('user_detail', 'users.id', '=', 'user_detail.user_id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->join('role', 'user_detail.role_id', '=', 'role.id')
            ->where('role.name', '=', 'Super Admin')->orWhere('role.name','=','Admin');

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

    public function checkPrefix($data)
    {
        if ($this->userModel->where('username', 'LIKE', $data.'%')
        ->count() > 0) {
            return true;
        }
        return false;
    }


    public function updateTokenRegistration($data)
    {

        return $this->userModel->query()
        ->where('email','=',$data['email'])
        ->update(['activation_token'=> $data['token']]);
    }

}


