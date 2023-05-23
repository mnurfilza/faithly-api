<?php

namespace App\Repositories\Db;

use App\Interfaces\GroupInterface;
use App\Models\GroupModel;
use Illuminate\Support\Facades\Hash;

class GroupRepository implements GroupInterface
{

protected $group;
public function __construct(GroupModel $group)
{
  $this->group = $group;   
}

public function createGroup($data)
{
    return $this->group->create([
        'group_name'=> $data['group_name'],
        'desc' => $data['desc'],
        'group_type_id' => $data['group_type_id']
    ]);
}
 public function listGroup($data)
 {

    $query = $this->group->query()
    ->join('group_member','group_member.group_id','=','group.id')
    ->where('group_member.user_id','=',$data['user_id']);

    $query->orderBy($data['order_by'], $data['sort_by']);

    $result = $query
        ->offset(($data['page'] - 1) * $data['perpage'])
        ->limit($data['perpage'])
        ->get(array('group.*'));
     $total = $query->count();
     return [
        'data' => $result,
        'total' => $total,
    ];

 }


 public function detailGroup($data)
 {
    $query = $this->group->query()
    ->where('group.id','=',$data['group_id'])
    ->selectRaw("group.*")
    ->get();

    return $query;
    
 }


 public function deleteUserFromGroup($data)
 {
    
 }


}