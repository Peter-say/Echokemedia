<?php 

namespace App\Helpers;

use App\Models\Post;
use Illuminate\Http\Request;


class MediaFilesHelper
{
    public static function saveFromRequest($file , $path , Request  $request)
    { 
       
       $file_name = $request->slug.".".$file->extension();
        $file->move(public_path($path) , $file_name);
        return $path."/".$file_name;
      
    }
}