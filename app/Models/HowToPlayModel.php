<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowToPlayModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'content',


    ];
    protected $table = 'how_to_play';

    protected $guarded = [];
}
