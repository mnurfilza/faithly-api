<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'subs_type_id',
        'name',

    ];
    protected $table = 'subscription';

    protected $guarded = [];
}
