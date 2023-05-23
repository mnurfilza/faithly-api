<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqItemModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'faq_id',
        'question',
        'answer',


    ];
    protected $table = 'faq_item';

    protected $guarded = [];
}
