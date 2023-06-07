<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


/**
 * @OA\Schema(
 *    schema="CardPayment",
 *    @OA\Property(
 *        property="id",
 *        type="integer",
 *        description="Id of card payment",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="user_detail_id",
 *        type="integer",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="card_number",
 *        type="integer",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="exp_date",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="code_verification",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *     @OA\Property(
 *        property="status_id",
 *        type="integer",
 *        description="",
 *        nullable=false,
 *    )
 * )
 */


class CardPayment extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'id',
        'user_detail_id',
        'card_number',
        'exp_date',
        'code_verification',
        'status_id',
        'stripe_payment_method_id'
    ];
    protected $table = 'card_payment';

    protected $guarded = [];
}
