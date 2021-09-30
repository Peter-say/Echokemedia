<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Earnings;
use Illuminate\Http\Request;

class EarningsController extends Controller
{
    public function earnings()
    {
        
        return view('dashboards.earnings', []);
    }
}
