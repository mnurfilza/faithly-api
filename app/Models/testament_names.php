<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testament_names extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'version_id',
        'testament_id',
        'name',

    ];
    protected $table = 'testament_names';

    protected $guarded = [];
}
