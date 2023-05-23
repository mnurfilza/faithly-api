<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'content',


    ];
    protected $table = 'faq';

    protected $guarded = [];
}
