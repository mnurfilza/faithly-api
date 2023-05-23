<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface GroupUsecaseInterface
{
    public function createGroup($data);
    public function listGroup($data);
    public function detailGroup($data);
    public function inviteUser($data);
    public function deleteUserFromGroup($data);
    public function acceptInvitation($data);

}
