<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'testament_id',
        'order',
        'order_all',

    ];
    protected $table = 'books';

    protected $guarded = [];
}
