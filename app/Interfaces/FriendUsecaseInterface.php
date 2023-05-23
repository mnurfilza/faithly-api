<?php

namespace App\Interfaces;

interface FriendUsecaseInterface
{
    public function addFriend($data);
    public function listFriend($data);

    public function dellFriend($data);

    public function AcceptRequest($data);
}
