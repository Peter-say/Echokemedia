<?php

namespace App\Models;

use Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{

    protected $fillable = ['status', 'media_type' , 'users_id'];

    use HasFactory;


    public function scopeApproved($query)
    {
        return $query->where("status" , Constants::APPROVED);
    }

}
