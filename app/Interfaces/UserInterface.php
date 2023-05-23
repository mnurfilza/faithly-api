<?php
namespace App\Interfaces;

interface UserInterface{
    public function storeUser($data,$activationToken,$status);
    public function checkEmail($email): bool;
    public function getuserByEmail($email);

    public function ListUser($data);
    public function updatePassAndStatus($data);
    public function userRole($data);

    public function getProfileUser($data);

    public function getUserByTokenActivation($data);
    public function verifiedUser($data);

    public  function  updateActivationTOken($data);


    public  function  getLisChild($data);
    public  function getListAdmin($data);

    public function checkPrefix($data);

    public function updateTokenRegistration($data);





}


