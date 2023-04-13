<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'fullname',
        'year_of_birth',
        'phone_number',
        'org_id',
        'subs_id',
        'user_id',
        'role_id',
        'parent_id',
    ];
    protected $table = 'user_detail';

    protected $guarded = [];
}
