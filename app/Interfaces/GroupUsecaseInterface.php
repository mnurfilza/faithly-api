<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface GroupUsecaseInterface
{
    public function createGroup(Request $request);
    public function listGroup(Request $request);

    public function inviteUser(Request $request);
    public function deleteUserFromGroup(Request $request);

}
