<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_names extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'version_id',
        'book_id',
        'name',

    ];
    protected $table = 'book_names';

    protected $guarded = [];
}
