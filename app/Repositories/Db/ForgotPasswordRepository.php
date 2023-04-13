<?php

namespace App\Repositories\Db;

use App\Interfaces\ForgotPasswordInterface;
use App\Models\ForgotPassword;

class ForgotPasswordRepository implements ForgotPasswordInterface
{

    protected $forgotPass;

    public function __construct(ForgotPassword $forgotPassword)
    {
        $this->forgotPass = $forgotPassword;
    }

    public function storeData($data)
    {
        return $this->forgotPass->create([
            'email' => $data['email'],
            'token' => $data['token'],
            'isUsed' => false,
            'created_at' => $data['created_at'],
        ]);

    }

    public function updateFlag($data)
    {
        // TODO: Implement updateData() method.
        $resp = $this->forgotPass->where('token', $data)->first();
        $resp->isUsed = true;
        return $resp - save();

    }

    public function checkToken($data)
    {
        return $this->forgotPass->where('token', $data)->first();
    }
}
