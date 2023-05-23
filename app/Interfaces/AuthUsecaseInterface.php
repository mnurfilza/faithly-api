<?php
namespace  App\Interfaces;

use Illuminate\Http\Request;

interface AuthUsecaseInterface{
    public function Register(Request $request, $platform);
    public function RegisterChildern(Request $request);
    public function Login(Request $request);
    public function ForgotPassword(Request $request, $platform);
    public function ConfirmPassword(Request $request);

    public function ResendLinkVerificationEmail(Request $request,$platform);

    public function VerifiedEmail(Request $request);

    public function LoginChild($request);

    public function ResendForgotPasswordLink($data);
 }


