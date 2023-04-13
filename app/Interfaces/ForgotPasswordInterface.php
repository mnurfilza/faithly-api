<?php

namespace App\Interfaces;

interface ForgotPasswordInterface
{
    public function storeData($data);
    public function updateFlag($data);

    public function checkToken($data);
}
