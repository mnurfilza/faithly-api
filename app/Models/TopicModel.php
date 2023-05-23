<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',


    ];
    protected $table = 'topic';
    protected $guarded = [];

}
