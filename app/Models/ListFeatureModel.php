<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListFeatureModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'feature',
       

    ];
    protected $table = 'list_feature';

    protected $guarded = [];
}
