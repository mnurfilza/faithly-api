<?php

namespace App\Interfaces;



interface GroupInterface{
    public function createGroup($data);
    public function listGroup($data);
    public function detailGroup($data);
    public function deleteUserFromGroup($data);

}