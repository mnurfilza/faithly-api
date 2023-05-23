<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testaments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'order',

    ];
    protected $table = 'testaments';

    protected $guarded = [];
}
