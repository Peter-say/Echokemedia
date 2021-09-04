<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('dashboards.admin');
    }


    public function profile()
    {
        return view('dashboards.profile');
    }
}