<?php

namespace App\Models;

use app\Helpers\Constants;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'avatar',
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
    ];


    public function user()
    {
        return $this->hasOne(Profile::class);
    }

    public function scopeApproved($query)
    {
        return $query->where("status");
    }



    public function wallet()
    {
        return $this->hasOne(Wallet::class, "user_id");
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, "user_id")
            ->whereHas("user")
            ->with("user")
            ->orderby("created_at", "desc");
    }
}
