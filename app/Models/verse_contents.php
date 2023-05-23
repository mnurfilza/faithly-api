<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verse_contents extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'version_id',
        'verses_id',
        'content',

    ];
    protected $table = 'verse_contents';

    protected $guarded = [];
}
