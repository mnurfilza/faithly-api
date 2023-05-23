<?php

namespace App\Interfaces;

interface FriendlistInterface
{

    public function connectFriend($data);

    public function listFriend($data);

    public function unconnectFriend($data);


    public function AcceptFriendRequest($data);

}
