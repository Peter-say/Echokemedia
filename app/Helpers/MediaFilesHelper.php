<?php 

namespace App\Helpers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediaFilesHelper
{
    public static function saveFromRequest($file , $path , Request  $request)
    { 
       
       $file_name = Str::slug($request->name, '-').".".$file->extension();
        $file->move(public_path($path) , $file_name);
        return $path."/".$file_name;
      
    }
}