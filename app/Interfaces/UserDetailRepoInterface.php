<?php
namespace App\Interfaces;

interface UserDetailRepoInterface{
    public function Store($data);

    public function getUserDetailByUserId($id);
    public function updateRole($data);

}


?>
