<?php

namespace App\Http\Middleware;

use App\Helpers\Constants;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovedMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->status !== Constants::APPROVED) {
            return back()->with('error_message', 'You are not yet aproved to post. Please contact the admin for further infomation.'); // do something if the user is not approved
        }else{
            return $next($request);
        }
        
    }
}
