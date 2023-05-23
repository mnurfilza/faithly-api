<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicVersesModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'topic_id',
        'verse_id'


    ];
    protected $table = 'topic_verses';
    protected $guarded = [];
}
