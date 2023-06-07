<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'provider',
        'provider_code',
        'is_active', 
    ];
    protected $table = 'payment_method';

    protected $guarded =[];
}
