<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @OA\Schema(
 *    schema="UserSchema",
 *    @OA\Property(
 *        property="id",
 *        type="integer",
 *        description="Id of card payment",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="username",
 *        type="integer",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="email",
 *        type="integer",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="password",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *    @OA\Property(
 *        property="status_id",
 *        type="string",
 *        description="",
 *        nullable=false,
 *    ),
 *
 * )
 */
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id',
    'username',
    'email',
    'password',
    'status_id',
    'activation_token',
    'activation_token_used'
];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'activation_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guarded = [];

 // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
