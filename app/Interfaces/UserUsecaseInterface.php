<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserUsecaseInterface{
    public function ListUser(Request $request, $isAdminSide);
    public function getProfileUser($id);

    public function  listAdmin($data);
    public function listChild($data);

    public function addAdmin($data);

    public  function  addChild($data);

    public function addOrganizationMember($data);

}
