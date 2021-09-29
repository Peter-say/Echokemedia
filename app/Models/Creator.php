<?php

namespace App\Models;

use app\Helpers\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{

    protected $fillable = ['status', 'media_type' , 'users_id'];

    use HasFactory;



}
