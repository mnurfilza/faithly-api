<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'group_id',
        'user_id',
        'is_lead',
        'is_admin',
        
    ];
    protected $table = 'group_member';

    protected $guarded = [];
}
