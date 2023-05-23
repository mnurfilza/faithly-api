<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'group_name',
        'group_type_id',
        'desc',
        'users',
        
    ];
    protected $table = 'group';

    protected $guarded = [];
}
