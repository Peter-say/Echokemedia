<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DeleteAccountController extends Controller
{

    public function deleteAccount()
    {
        $user = Auth::user();
        return view('dashboards.settings.delete-account', compact('user'));
    }

    public function accountDeltionToken()
    {
        return Str::random(40);
    }

    public function delete(Request $request, $id)
    {
        dd('kdjdh');
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            $request->validate([
                'password' => 'password|required',
            ]);
            User::findOrFail($id)->delete();
            return redirect()->route('/')->with('success_message', 'Account deleted successfully');
        } else {
            return back()->with('error_message', "You can't delete this account because your password is empty/incorrect");
        }
    }
}
