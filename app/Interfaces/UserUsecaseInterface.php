<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserUsecaseInterface{
    public function ListUser(Request $request);
    public function getProfileUser($id);

}
