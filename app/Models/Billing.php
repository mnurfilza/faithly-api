<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_detail_id',
        'next_payment_date',
        'status_id'
    ];
    protected $table = 'billing';

    protected $guarded =[];
}
