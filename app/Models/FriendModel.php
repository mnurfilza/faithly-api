<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *    schema="FriendSchema",
 *    @OA\Property(
 *        property="user_id",
 *        type="integer",
 *        description="Id of card payment",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="phone_number",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="fullname",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="email",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="status",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *     @OA\Property(
 *        property="role_type",
 *        type="integer",
 *        description="",
 *        nullable=false,
 *    )
 * )
 */
class FriendModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'friend_id',
        'status_id',
    ];
    protected $table = 'friend';

    protected $guarded = [];
}
