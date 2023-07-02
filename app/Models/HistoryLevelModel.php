<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryLevelModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'status_id',
        'level_id',
        'user_id'


    ];
    protected $table = 'history_level';
    use HasFactory;
}
