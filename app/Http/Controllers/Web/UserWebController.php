<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\AuthUsecaseInterface;
use App\Interfaces\RoleUsecaseInterface;
use Illuminate\Http\Request;

class UserWebController extends Controller
{
    protected $user;
    protected $role;

    public function __construct(AuthUsecaseInterface $user, RoleUsecaseInterface $role)

    {

        $this->user = $user;
        $this->role = $role;
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];

            $request->validate([
                'username' => 'required',
                'password' => 'required',

            ], $messages);
            $resp = $this->user->Login($request);
            $obj = json_decode($resp->getContent());

            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();

        }
        return redirect('/showRegister')->with(['data', 'Success Login']);
    }

    public function showRegister(Request $request)
    {

        $resp = $this->role->getListRole();
        $obj = json_decode($resp->getContent());
        return view('signup', ['roles' => $obj->data]);
    }

    public function Registration(Request $request)
    {

        try {
            $messages = [
                'required' => ':attribute cannot be empty',
                'max' => ':attribute Max :max character',
                'min' => ':attribute Min :min character'
            ];
            $request->validate([
                'username' => 'required|min:3',
                'email' => 'required|email',
                'year_of_birth' => 'required',
                'fullname' => 'required',
                'password' => 'required',

            ], $messages);


            $resp = $this->user->Register($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('error', $obj->meta->response_message);
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();

        }

        session()->put('data',['email'=>$request['email'],'exp_time'=>350]);
        return \redirect('verification-account');

    }


    public function VerificationAccount()
    {
        return view('verification-parent');
    }


    public function verifiedEmail(Request $request)
    {

        try {
            $resp = $this->user->VerifiedEmail($request);
            $obj = json_decode($resp->getContent());
            if ($resp !== null && $resp->getStatusCode() !== 200) {
                session()->put('exp', $obj->meta->response_message);
                return redirect('verification-account');
            }
        }catch (\Throwable $th)
        {
            session()->put('error', $th->getMessage());
            return redirect()->back()->withInput();

        }

        return view('verification-success');

    }
}

