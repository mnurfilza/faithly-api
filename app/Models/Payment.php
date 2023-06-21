<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'billing_id',
        'status_id',
        'coupon',
        'total',
        'payment_method_id',
        'price_subscription',
        'payment_date',
        'invoice_number',
        
    ];
    protected $table = 'payment';

    protected $guarded =[];
}
