<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Creator;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class CreatorsController extends Controller
{
    public function approved_creators()
    {
      $creators = Creator::approved()->whereHas("user")
      ->with("user")
      ->orderby("created_at", "desc")
      ->paginate(20);
      return view('dashboards.users.index' , [ 'creators' => $creators]);
    }


}
