<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\BillingInterface;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\SubscriptionInterface;
use App\Interfaces\UserDetailRepoInterface;
use App\Interfaces\UserInterface;
use App\Interfaces\UserUsecaseInterface;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserUsecase implements UserUsecaseInterface
{

    protected $roleEloq;

    protected $userInterface;
    protected $eloqUserDetail;

    protected $subs;
    protected $bill;

    public function __construct(
        UserInterface           $userInterface,
        UserDetailRepoInterface $eloqUserDetail,
        RoleRepositoryInterface $roleEloq,
        BillingInterface $bill,
        SubscriptionInterface $subs,

    )
    {
        $this->userInterface = $userInterface;
        $this->eloqUserDetail = $eloqUserDetail;
        $this->roleEloq = $roleEloq;
        $this->bill = $bill;
        $this->subs = $subs;
    }

    //mobile API
    public function ListUser(Request $request, $isAdminSide)
    {
        //check only super admin can see this enpoint
        $id = 0;
        if (auth()->user() !== null) {
            $roles = $this->userInterface->userRole(auth()->user()->id);
            if ($roles->role_type != 'Super Admin') {
                return ApiResponse::errorResponse("Unauthorized", "", 401);
            }

            $id = auth()->user()->id;
        }

        $resp = $this->userInterface->ListUser([
            'perpage' => $request->query('perpage') ?? 10,
            'page' => $request->query('page') ?? 1,
            'search' => $request->query('search') ?? '',
            'sort_by' => $request->query('sort_by') ?? 'asc',
            'order_by' => $request->query('order_by') ?? 'fullname',
            'user_id' => $id,
            'isAdminSide' => $isAdminSide
        ]);


        return ApiResponse::ResponsePaginate(
            $resp['data'],
            $request->query('perpage') ?? 10,
            $request->query('page') ?? 1,
            $resp['total'],
            '',
            'Success Retrieve Data',
            200,
        );
    }

    public function getProfileUser($id)
    {

        return ApiResponse::successResponse($this->userInterface->getProfileUser($id),
            "Success Get Profile",
            200);

    }

    public function listAdmin($data)
    {

        $resp = $this->userInterface->getListAdmin([
            'perpage' => $data['perpage'] ?? 10,
            'page' => $data['page'] ?? 1,
            'search' => $data['search'] ?? '',
            'sort_by' => $data['sort_by'] ?? 'asc',
            'order_by' => $data['order_by'] ?? 'fullname'
        ]);
        return ApiResponse::ResponsePaginate(
            $resp['data'],
            $data['perpage'] ?? 10,
            $data['page'] ?? 1,
            $resp['total'],
            '',
            'Success Retrieve Data',
            200,
        );
    }

    public function listChild($data)
    {
        $resp = $this->userInterface->getLisChild([
            'perpage' => $data['perpage'] ?? 10,
            'page' => $data['page'] ?? 1,
            'search' => $data['search'] ?? '',
            'sort_by' => $data['sort_by'] ?? 'asc',
            'order_by' => $data['order_by'] ?? 'fullname',
            'parent_id' => $data['parent_id'] ?? ''
        ]);


        return ApiResponse::ResponsePaginate(
            $resp['data'],
            $data['perpage'] ?? 10,
            $data['page'] ?? 1,
            $resp['total'],
            '',
            'Success Retrieve Data',
            200,
        );
    }


    public function addAdmin($data)
    {
        $isEmailExist = $this->userInterface->checkEmail($data['email']);

        if ($isEmailExist) {
            return ApiResponse::errorResponse("Email Already Exist", '', 409);
        }

        $token = Str::random(64);


        //get role by name
        $role = $this->roleEloq->getRoleByName('Admin');
        if ($role == null) {
            return ApiResponse::errorResponse('Role' . ' ' . 'Admin' . ' ' . "Doesn't Exists", '', 404);
        }

        //save to user
        $user = $this->userInterface->storeUser($data, $token, 1);

        //save to user detail

        $userDetail = [
            'user_id' => $user->id,
            'fullname' => $data['fullname'],
            'phone_number' => $data['phone_number'] ?? "",
            'role_id' => $role->id,
            'parent_id' => 0,
            'org_id' => $data['organization_id'] ?? 0,
            'year_of_birth' => $data['year_of_birth'] ?? "",
            'subs_id' => $data['subs_id'] ?? 0,

        ];

        $detailResp = $this->eloqUserDetail->Store($userDetail);
        $link = env('BASE_URL') . '/activate?token=' . $token;
        if ($data['platform'] == 'mobile') {
            $link = 'myapp://success-verification?token=' . $token;

        }
        $mailData = [
            'title' => 'Verification Email',
            'body' => env('BASE_URL') . '/activate?token=' . $token
        ];

        //send to email link forgot password
        $mail = Mail::to($data['admin_email'])->send(new SendEmail($mailData, "Verification Email"));

        if ($mail instanceof \Illuminate\Mail\SentMessage) {
            //email sent success
            return ApiResponse::successResponse(['subject' => '', 'from' => \env('MAIL_FROM_ADDRESS'), 'to' => $data['email']], "Link Alredy Send to " . ' ' . $data['email']);
        }


        return ApiResponse::successResponse([
            'subs_id' => $detailResp->subs_id,
            'user_detail_id' => $detailResp->id,
            'org_id' => $detailResp->org_id,
        ], "Success Register", 200);
    }

    public function addChild($data)
    {

        //inquiry subscription to get price
        $subs = $this->subs->getSubs($data['subs_id']);

        foreach ($data['data'] as $value) { 
            $email = $data['parent_email'];
            if ($value['email'] != "") {
                $isEmailExist = $this->userInterface->checkEmail(['email'=>$value['email'],'username'=>$value['email']]);

                if ($isEmailExist) {
                    return ApiResponse::errorResponse("Email Already Exist", '', 409);
                }

                $email = $value['email'];
            }

            $token = Str::random(64);


            //get role by name
            $role = $this->roleEloq->getRoleByName('Childern');
            if ($role == null) {
                return ApiResponse::errorResponse('Role' . ' ' . 'Admin' . ' ' . "Doesn't Exists", '', 404);
            }
            $randomNumber = rand(1, 999999);
            $sixDigitNumber = str_pad($randomNumber, 6, '0', STR_PAD_LEFT);
            $suffix = Str::random(3);
            $username= $data['prefix'] . $suffix;
            $password = $sixDigitNumber;
            //save to user

            $user = $this->userInterface->storeUser(['username'=> $username, 
            'password'=> $password,
            'email'=> $value['email'] ?? ""], $token, 2);

            //save to user detail

            $userDetail = [
                'user_id' => $user->id,
                'fullname' => "",
                'phone_number' => "",
                'role_id' => $role->id,
                'parent_id' => $data['parent_id'] ?? 0,
                'org_id' => 0,
                'year_of_birth' => $value['year_of_birth'] ?? "",
                'subs_id' => $data['subs_id'] ?? 0,

            ];



            $detailResp = $this->eloqUserDetail->Store($userDetail);

            $mailData = [
                'title' => 'Verification Email',
                'body' =>  $sixDigitNumber
                
            ];

            //need to throw mq
            

            // $mail = Mail::to($email)->queue(new SendEmail($mailData, "Verification Email"));
            // if (!$mail instanceof \Illuminate\Mail\SentMessage) {
            //     //email sent success
            //     return ApiResponse::successResponse(['subject' => '', 'from' => \env('MAIL_FROM_ADDRESS'), 'to' => $email], "Failed Send to " . ' ' . $email);
            // }
    
        }

        //add to billing if freeplan
        if (count($data['data'])<=2) {
            //add billing free
            $now = Carbon::now();
            $futureDate = $now->addDays(7);
            $this->bill->CreateBilling([
                'user_detail_id'=> $data['parent_id'],
                'next_payment_date'=>  $futureDate,
                'status_id'=> 7
            ]);
        }


        return ApiResponse::successResponse([
            'subs_id' => $detailResp->subs_id,
            'user_detail_id' => $detailResp->id,
            'org_id' => $detailResp->org_id,
            'price'=> $subs['price'],
        ], "Success Register", 200);
    }

    public function addOrganizationMember($data)
    {

        $isPrefixExist = $this->userInterface->checkPrefix($data['prefix']);
        if ($isPrefixExist) {
            return ApiResponse::errorResponse("Prefix Already Exist", '', 409);
        }
        $isEmailExist = $this->userInterface->checkEmail($data['email']);

        if ($isEmailExist) {
            return ApiResponse::errorResponse("Email Already Exist", '', 409);
        }

        $token = Str::random(64);
        $suffix = Str::random(3);
        $password = Str::random(6);


        //get role by name
        $role = $this->roleEloq->getRoleByName('Organization Member');
        if ($role == null) {
            return ApiResponse::errorResponse('Role' . ' ' . 'Admin' . ' ' . "Doesn't Exists", '', 404);
        }

        $data['username'] = $data['prefix'] . $suffix;
        $data['password'] = $password;
        //save to user
        $user = $this->userInterface->storeUser($data, $token, 2);

        //save to user detail
        $userDetail = [
            'user_id' => $user->id,
            'phone_number' => $data['phone_number'] ?? "",
            'role_id' => $role->id,
            'parent_id' => 0,
            'fullname' => $data['fullname'] ?? "",
            'org_id' => $data['organization_id'] ?? 0,
            'year_of_birth' => $data['year_of_birth'] ?? "",
            'subs_id' => $data['subs_id'] ?? 0,

        ];

        $detailResp = $this->eloqUserDetail->Store($userDetail);

        $mailData = [
            'title' => 'Verification Email',
            'body' => 'password :' . $password,
        ];

        //send to email link forgot password
        $mail = Mail::to($data['email'])->send(new SendEmail($mailData, "Verification Email"));

        if ($mail instanceof \Illuminate\Mail\SentMessage) {
            //email sent success
            return ApiResponse::successResponse(['subject' => '', 'from' => \env('MAIL_FROM_ADDRESS'), 'to' => $data['email']], "Link Alredy Send to " . ' ' . $data['email']);
        }


        return ApiResponse::successResponse([
            'subs_id' => $detailResp->subs_id,
            'user_detail_id' => $detailResp->id,
            'org_id' => $detailResp->org_id,
        ], "Success Register", 200);
    }
}
