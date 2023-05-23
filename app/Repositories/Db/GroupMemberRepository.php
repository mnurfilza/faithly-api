<?php


namespace App\Repositories\Db;

use App\Interfaces\GroupMemberInterface;
use App\Models\GroupMember;

class GroupMemberRepository implements GroupMemberInterface
{

    protected $member;

    public function __construct(GroupMember $member)
    {
        $this->member = $member;
    }
    public function createMemberGroup($data)
    {
        return $this->member->insert($data);
    }

    public function listMemberGroup($data)
    {
        return $this->member->query()
        ->limit(10)
        ->where('group_id','=',$data)
        ->get();
    }

  
    public function accpetInvitation($data)
    {
       return $this->member->query()
       ->where('user_id','=',$data['user_id'])
       ->where('group_id','=',$data['group_id'])
       ->update(['status_id'=>15]);
      
    }
}
