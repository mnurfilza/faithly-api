<?php

namespace App\Usecase;

use App\Helper\ApiResponse;
use App\Interfaces\AuthUsecaseInterface;
use App\Interfaces\ForgotPasswordInterface;
use App\Interfaces\OrganizationInterface;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\UserDetailRepoInterface;
use App\Interfaces\UserInterface;
use App\Mail\SendEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthUsecase implements AuthUsecaseInterface
{
    protected $eloquentUser;
    protected $eloqUserDetail;
    protected $roleEloq;

    protected $org;

    protected $forgotPassw;

    function __construct(
        UserInterface           $eloquentUser,
        UserDetailRepoInterface $eloqUserDetail,
        RoleRepositoryInterface $roleEloq,
        OrganizationInterface   $org,
        ForgotPasswordInterface $fg,
    )
    {
        $this->eloqUserDetail = $eloqUserDetail;
        $this->roleEloq = $roleEloq;
        $this->eloquentUser = $eloquentUser;
        $this->org = $org;
        $this->forgotPassw = $fg;
    }

    public function Register(Request $request)
    {
        $isEmailExist = $this->eloquentUser->checkEmail($request->email);

        if ($isEmailExist) {
            return ApiResponse::errorResponse("Email Already Exist", '', 409);
        }

        $token = Str::random(64);


        //get role by name
        $role = $this->roleEloq->getRoleByName('Individual');
        if ($role == null) {
            return ApiResponse::errorResponse('Role' . ' ' . $request['role'] . ' ' . "Doesn't Exists", '', 404);
        }

        //save to user
        $user = $this->eloquentUser->storeUser($request, $token);

        //save to user detail

        $userDetail = [
            'user_id' => $user->id,
            'fullname' => $request['fullname'],
            'phone_number' => $request['phone_number'] ?? "",
            'role_id' => $role->id,
            'parent_id' => 0,
            'org_id' => 0,
            'year_of_birth' => $request['year_of_birth'],
            'subs_id' => $request['subs_id'],

        ];

        $detailResp = $this->eloqUserDetail->Store($userDetail);

        $mailData = [
            'title' => 'Verification Email',
            'body' => env('BASE_URL') . '/activate?token=' . $token
        ];

        //send to email link forgot password
        $mail = Mail::to($request['email'])->send(new SendEmail($mailData, "Verification Email"));

        if ($mail instanceof \Illuminate\Mail\SentMessage) {
            //email sent success
            return ApiResponse::successResponse(['subject' => '', 'from' => \env('MAIL_FROM_ADDRESS'), 'to' => $request['email']], "Link Alredy Send to " . ' ' . $request['email']);
        }


        return ApiResponse::successResponse([
            'subs_id' => $detailResp->subs_id,
            'user_detail_id' => $detailResp->id,
            'org_id' => $detailResp->org_id,
        ], "Success Register", 200);
    }

    public function RegisterChildern(Request $request)
    {

    }

    public function Login(Request $request)
    {

        //only verified account can login
        $res = $this->eloquentUser->getuserByEmail($request['username']);
        if ($res === null) {

            return ApiResponse::errorResponse("User Undefined", '', 404);
        }

        if ($res->status !== 'Active') {

            return ApiResponse::errorResponse("User Not Active", '', 403);
        }
        $detail = $this->eloquentUser->userRole($res->id);

        if ($token = JWTAuth::attempt(['username' => $res['username'], 'password' => $request['password']])) {

            return $this->respondWithToken($token, $detail['role_type']);

        }


        return ApiResponse::errorResponse("Username or Password Invalid", '', 401);
    }

    public function ConfirmPassword(Request $request)
    {

        $data = $this->forgotPassw->checkToken($request->query('token'));
        if ($data == null) {
            return ApiResponse::errorResponse("Unknown Token", '', 404);
        }
        $created_date = new Carbon($data['created_at']);
        $current_date = Carbon::now();

        $duration = $current_date->diffInMinutes($created_date);

        //put duration on env file, so in the future will be easy to adjust
        if ($duration >= 5) {
            return ApiResponse::errorResponse("Token Expired", '', 401);
        }

        //update flag isUsed => true
        $this->forgotPassw->updateFlag($request->query('token'));

        //update status user => Active and update password
        $resp = $this->eloquentUser->updatePassAndStatus(['email' => $data['email'], 'password' => $request['password']]);


        return ApiResponse::successResponse($resp, "Success to change password", 200);


    }

    public function ForgotPassword(Request $request)
    {
        $email = $this->eloquentUser->getuserByEmail($request['email']);
        if ($email == null) {
            return ApiResponse::errorResponse("Email Not Found", '', 404);
        }
        $token = Str::random(64);

        // save to password token
        $re = $this->forgotPassw->storeData([
            'email' => $request['email'],
            'token' => $token,
            'isUsed' => false,
            'created_at' => Carbon::now(),
        ]);

        $mailData = [
            'title' => 'Forgot Password', '
            body' => env('BASE_URL') . $token
        ];

        //send to email link forgot password
        $mail = Mail::to($email['email'])->send(new SendEmail($mailData, "Test Email"));

        if ($mail instanceof \Illuminate\Mail\SentMessage) {
            //email sent success
            return ApiResponse::successResponse(['subject' => '', 'from' => \env('MAIL_FROM_ADDRESS'), 'to' => $email->email], "Link Alredy Send to " . ' ' . $email->email);
        }

        return ApiResponse::errorResponse('Failed To Request Forgot Password', '', 500);

    }

    public function ResendLinkVerificationEmail(Request $request)
    {
        $email = $this->eloquentUser->getuserByEmail($request['email']);
        if ($email == null) {
            return ApiResponse::errorResponse("Email Not Found", '', 404);
        }
        $token = Str::random(64);

        // save to password token
        $re = $this->forgotPassw->storeData([
            'email' => $request['email'],
            'token' => $token,
            'isUsed' => false,
            'created_at' => Carbon::now(),
        ]);

        $mailData = [
            'title' => 'Forgot Password', '
            body' => ''
        ];


        //send to email link forgot password
        $mail = Mail::to($email['email'])->send(new SendEmail($mailData, "Test Email"));

        if ($mail instanceof \Illuminate\Mail\SentMessage) {
            //email sent success
            return ApiResponse::successResponse(['subject' => '', 'from' => \env('MAIL_FROM_ADDRESS'), 'to' => $email->email], "Link Alredy Send to " . ' ' . $email->email);
        }

        return ApiResponse::errorResponse('Failed To Request Forgot Password', '', 500);
    }

    protected function respondWithToken($token, $role)
    {
        return ApiResponse::successResponse([
            'access_token' => $token,
            'token_type' => 'bearer',
            'role' => $role,
        ], 'Success Login');
    }


    public function VerifiedEmail(Request $request)
    {

        if ($request->query('token') == "") {
            return ApiResponse::errorResponse('Token Cannot Be Empty', '', 400);
        }

        $token = $this->eloquentUser->getUserByTokenActivation($request->query('token'));
        $created_date = new Carbon($token['created_at']);
        $current_date = Carbon::now();

        $duration = $current_date->diffInMinutes($created_date);

        //put duration on env file, so in the future will be easy to adjust
        if ($duration >= 5) {
            return ApiResponse::errorResponse("Token Expired", '', 401);
        }

        if ($token->activation_token_used) {
            return ApiResponse::errorResponse('Token Already Used', '', 400);
        }

        $this->eloquentUser->updateActivationTOken($token->id);

        $this->eloquentUser->verifiedUser($token->id);
        return ApiResponse::successResponse('', 'Success Verified Email', 200);
    }
}


