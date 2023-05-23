<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'questions',
        'time_per_question',
        'free_answer',
        'general_refs',
        'reward_coins',
        'level',
        'isFinalLevel'

    ];
    protected $table = 'level';
    protected $guarded = [];
}
