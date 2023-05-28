<?php

namespace App\Http\Controllers\Dashboard\Authorization;

use App\Constants\AppConstants;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{

    public function index()
    {
        if (Auth::user()->role == 'Super-Admin') {
            $users = User::where('status', 'Approved')->get();
            return view('dashboards.authorization.role.assingn-role', compact('users'));
        } else {
            abort(403, 'Unauthorized');
        }
    }


    public function assign(Request $request, $id)
    {
        User::findOrFail($id)->update([
            "role" => $request->role,
        ]);
        return back()->with("success_message", "Role updated successfully!");
    }
}
