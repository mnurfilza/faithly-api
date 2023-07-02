<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'answer',
        'question_id',
        'isCorrect'
    ];
    protected $table = 'answer';


    protected $guarded =[]; 

    public function getIsCorrectAttribute($value)
    {
        return (bool) $value;
    }
    use HasFactory;
}
