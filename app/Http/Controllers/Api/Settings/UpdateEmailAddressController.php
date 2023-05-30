<?php

namespace App\Http\Controllers\Api\Settings;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdateEmailAddressController extends Controller
{
    public function UpdateEmail(Request $request, User $user, $id)
    {
        try {
            // $user = Auth::user();
            Hash::check($request->password, $user->password);
            $request->validate(['email' => 'email|required']);
            User::findOrFail($id)->update(['email' => $request->email]);
            return ApiHelper::validResponse('success_message', 'Email updated successfully');
        } catch (ValidationException $e) {
            ApiHelper::inputErrorResponse("Incorrect Password");
        }
    }
}
