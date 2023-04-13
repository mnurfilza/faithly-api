<?php
namespace  App\Interfaces;

use Illuminate\Http\Request;

interface AuthUsecaseInterface{
    public function Register(Request $request);
    public function RegisterChildern(Request $request);
    public function Login(Request $request);
    public function ForgotPassword(Request $request);
    public function ConfirmPassword(Request $request);

    public function ResendLinkVerificationEmail(Request $request);

 }


