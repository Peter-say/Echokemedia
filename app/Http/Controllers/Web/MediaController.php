<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function music_list()
    {
       
        return view('web.music.list');
       
    }

    public function getBreadcrumbData($request)
    {
        $title = ucfirst($request->type);
        $value = "";
        $searchKeyword = $request->search;

        if (!empty($searchKeyword)) {
            $title = "Search result for: ";
            $value = "\"$searchKeyword\"";
        }

        return [
            "breadcrumbTitle" => $title,
            "breadcrumbValue" => $value
        ];
    }
}
