<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapters extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'book_id',
        'order',

    ];
    protected $table = 'chapters';

    protected $guarded = [];
}
