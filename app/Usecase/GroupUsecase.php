<?php
namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\GroupInterface;
use App\Interfaces\GroupMemberInterface;
use App\Interfaces\GroupUsecaseInterface;
use App\Interfaces\UserInterface;
use App\Models\GroupMember;
use Illuminate\Http\Request;

class GroupUsecase implements GroupUsecaseInterface
{
    protected $group;
    protected $member;

    protected $user;
    public function __construct(GroupInterface $group, 
    GroupMemberInterface $member,
    UserInterface           $user,
    )
    {
        $this->group = $group;
        $this->member = $member;
        $this->user = $user;
    }
    public function createGroup($data)
    {
        //if individual or childern and isGeneral != 0  group type = general group
        $groupType = 1;
        $role = $this->user->userRole(auth()->user()->id);
        if (($role['role_type'] == "Childern" ||$role['role_type'] == "Organization Member") || $data['is_general'] !== "0") {
            $groupType = 2;
        }

        //insert to group table
        $rs = $this->group->createGroup([
            'group_name'=> $data['group_name'],
            'desc' => $data['desc'],
            'group_type_id' => $groupType,
        ]);

        $members = array();
        for ($i=0; $i < count($data['members']) ; $i++) { 
            $member = $data['members'][$i];
            $members[] = [
                'group_id'=> $rs->id,
                'user_id'=> $member['user_id'],
                'is_lead'=> $member['is_lead'],
                'is_admin'=> false,
                'status_id'=> $data['status_id']
            ];
        }

        //insert to member group 
        $member = $this->member->createMemberGroup($members);

        return ApiResponse::successResponse(['group'=> $rs],'Success Create Group',200);
    }

    public function listGroup($data)
    {
        $res = $this->group->listGroup(['perpage' => $data['perpage'] ?? 10,
        'page' => $data['page'] ?? 1,
        'search' => $data['search'] ?? '',
        'sort_by' => $data['sort_by'] ?? 'asc',
        'order_by' => $data['order_by'] ?? 'fullname',
        'user_id' => auth()->user()->id,
    ]);
    return ApiResponse::ResponsePaginate(
        $res['data'],
        $data['perpage'] ?? 10,
        $data['page'] ?? 1,
        $res['total'],
        '',
        'Success Retrieve Data',
        200,
    );
        
    }


    public function detailGroup($data)
    {
        //get group information
        $grp = $this->group->detailGroup($data);
        //get group member
        $member = $this->member->listMemberGroup($data);
        return ApiResponse::successResponse(['group_detaol'=> $grp, 'member'=> $member],"success get detail group",200);
    }

    public function inviteUser($data)
    {
        $members = array();
        for ($i=0; $i < count($data['members']) ; $i++) { 
            $member = $data['members'][$i];
            $members[] = [
                'group_id'=> $data['group_id'],
                'user_id'=> $member['user_id'],
                'is_lead'=> false,
                'is_admin'=> $data['is_admin'],
                'status_id'=> 14,
            ];
        }
        $member = $this->member->createMemberGroup($members);
        return ApiResponse::successResponse([],'Success Add Member To Group',200);


    }

    public function deleteUserFromGroup($data)
    {
        
    }


    public function acceptInvitation($data)
    {
        $res = $this->member->accpetInvitation(['user_id'=>$data['user_id'],'group_id'=> $data['group_id']]);

        return ApiResponse::successResponse([],'success join group',200);
    }
}
