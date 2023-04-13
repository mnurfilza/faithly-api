<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'friend_id',
        'status_id',
    ];
    protected $table = 'friend';

    protected $guarded = [];
}
