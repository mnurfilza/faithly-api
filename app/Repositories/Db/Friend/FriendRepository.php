<?php

namespace App\Repositories\Db\Friend;

use \App\Interfaces\FriendlistInterface;
use App\Models\FriendModel;

class FriendRepository implements FriendlistInterface
{
    protected  $friend;
    public function __construct(FriendModel $friend)
    {
        $this->friend = $friend;
    }
    public function connectFriend($data)
    {
        return $this->friend->create([
                
        ]);
    }

    public function listFriend($data)
    {
        // TODO: Implement listFriend() method.
    }

    public function unconnectFriend($data)
    {
        // TODO: Implement unconnectFriend() method.
    }
}
