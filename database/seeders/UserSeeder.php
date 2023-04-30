<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
           'username'=>'admin',
           'email'=>'admin@admin.com',
           'password'=> Hash::make('P@ssw0rd'),
           'status_id' => 2,
           'activation_token' => ''

        ];


        $user = new User();
        $ud = new UserDetail();

       $res =  $user->create($data);

       $userDetail = [
        'user_id' => $res->id,
        'fullname' => 'Admin 1',
        'phone_number' =>  "",
        'role_id' => 6,
        'parent_id' => 0,
        'org_id' => 0,
        'year_of_birth' => "",
        'subs_id' => 0,

    ];


    $ud->create($userDetail);


    }
}
