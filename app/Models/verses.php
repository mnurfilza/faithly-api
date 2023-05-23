<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verses extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cahpter_id',
        'order',


    ];
    protected $table = 'verses';

    protected $guarded = [];
}
