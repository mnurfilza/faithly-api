<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\OrganizationInterface;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\SubscriptionInterface;
use App\Interfaces\SubscriptionUsecaseInterface;
use App\Interfaces\UserDetailRepoInterface;
use Illuminate\Http\Request;

class SubscriptionUsecase implements SubscriptionUsecaseInterface
{

    protected $subs;
    protected $org;
    protected  $ud;
    protected $role;
     public function __construct(
        SubscriptionInterface $sub, 
        OrganizationInterface $org,
        UserDetailRepoInterface $ud, 
        RoleRepositoryInterface $role,
        ) {
        $this->subs = $sub;
        $this->org = $org;
        $this->ud = $ud;
        $this->role = $role;
    }
    public function updateSubscription(Request $request)
    {
       $this->subs->updateSubs($request);
        return ApiResponse::successResponse($request,'success update subscription');
    }

    public function listSubs($request)
    {
        return ApiResponse::successResponse($this->subs->listSubscription($request['subs_type']),'success get list', 200);
    }

    public function contribute($data)
    {

        $roles = $data['plan_role'];
        $org_id = 0;
        if($data['plan_role'] === 'organization')
        {
            $roles = 'organization admiin';
            $org_id = $this->org->storeOrganization(['name'=>'ORG'+$data['name'],'number_users'=>$data['number_users']]);
        }

        $rle = $this->role->getRoleByName($roles);
        
        //update to user detail
        $data =[
            'id' => $data['id'],
            'role_id' => $rle->id,
            'org_id' => $org_id,
        ];
        $this->ud->updateRole($data);
        return ApiResponse::successResponse($data,'success update subscription');

    }
}

