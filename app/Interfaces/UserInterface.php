<?php
namespace App\Interfaces;

interface UserInterface{
    public function storeUser($data,$activationToken);
    public function checkEmail($email): bool;
    public function getuserByEmail($email);

    public function ListUser($data);
    public function updatePassAndStatus($data);
    public function userRole($data);

    public function getProfileUser($data);

    public function getUserByTokenActivation($data);
    public function verifiedUser($data);

    public  function  updateActivationTOken($data);

}


