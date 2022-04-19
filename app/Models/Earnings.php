<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earnings extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
      

    public function getEarnigs( Post $post, User $user)
    {
        // $post = 2;
        // $money = 50;
        // if($post == 2  || $post > 2)
        // {
        //    echo $money * $post ;
        // }else{
        //     echo 'not qualify';
        // }
    }
}
