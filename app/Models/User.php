<?php

namespace App\Models;

use app\Helpers\Constants;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail

{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

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
        'is_email_verified',
        'status'
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
        'created_at' => 'datetime',
        'email_verified_at' => 'datetime',
    ];




    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function contact()
    {
        return $this->hasMany(ContactUs::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'user_id' , 'post_id');

    }

    public function user()
    {
        return $this->hasOne(Profile::class , "user_id" , "id");
    }


    public function scopeApproved($query)
    {
        return $query->where("status" , Constants::APPROVED);
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
