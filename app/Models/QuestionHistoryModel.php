<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionHistoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'status_id',
        'question_id',
        'user_id'


    ];
    protected $table = 'question_history';
    protected $guarded = [];
}
