<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_detail_id',
        'card_number',
        'exp_date',
        'code_verification',
        'status_id',
    ];
    protected $table = 'friend';

    protected $guarded = [];
}
