<?php

namespace App\Repositories\Db;

use App\Interfaces\FriendlistInterface;
use App\Models\FriendModel;

class FriendRepository implements FriendlistInterface
{
    protected $friend;

    public function __construct(FriendModel $friend)
    {
        $this->friend = $friend;
    }

    public function connectFriend($data)
    {
        return $this->friend->create([
            'user_id' => $data['user_id'],
            'friend_id' => $data['friend_id'],
            'status_id' => $data['status_id']
        ]);
    }

    public function listFriend($data)
    {
        $query = $this->friend
            ->query()
            ->join('users', 'users.id', '=', 'friend.friend_id')
            ->join('user_detail', 'user_detail.user_id', '=', 'users.id')
            ->join('statuses', 'users.status_id', '=', 'statuses.id')
            ->join('role', 'user_detail.role_id', '=', 'role.id')
            ->where('statuses.name', '=', 'Active')
            ->where('friend.user_id', '=', $data['user_id']);

        if ($data['isRequest'] === "1") {
            $query->join('statuses', 'friend.status_id', '=', 'statuses.id')
                ->where('statuses.name', '=', 'Request');
        }
        if ($data['search'] !== "") {
            $query
                ->whereRaw("user_detail.fullname LIKE '%" . $data['search'] . "%' OR phone_number LIKE `%" . $data['search'] . "%'");
        }
        $query->orderBy($data['order_by'], $data['sort_by']);

        $result = $query
            ->offset(($data['page'] - 1) * $data['perpage'])
            ->limit($data['perpage'])
            ->get(array('users.id as user_id',
                'user_detail.phone_number as phone_number',
                'user_detail.fullname as fullname',
                'users.email as email',
                'statuses.name as status',
                'role.name as role_type'));
        $total = $query->count();


        return [
            'data' => $result,
            'total' => $total,
        ];
    }

    public function unconnectFriend($data)
    {
        return $this->friend
            ->query()
            ->where('friend_id', '=', $data['friend_id'])
            ->delete();
    }


    public function AcceptFriendRequest($data)
    {
        return $this->friend
            ->query()
            ->where('friend_id', '=', $data['friend_id'])
            ->update(['status_id' => 10]);
    }
}
