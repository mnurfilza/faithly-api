<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionHistoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'level_id',
        'question'


    ];
    protected $table = 'question';
    protected $guarded = [];
}
