<?php
namespace App\Interfaces;

interface UserInterface{
    public function storeUser($data);
    public function checkEmail($email): bool;
    public function getuserByEmail($email);

    public function ListUser($data);
    public function updatePassAndStatus($data);
    public function userRole($data);

    public function getProfileUser($data);

}


