<?php

namespace App\Interfaces;


interface GroupMemberInterface 
{

    public function createMemberGroup($data);
    public function listMemberGroup($data);    
    public function accpetInvitation($data);

}