<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthorizationServices extends Controller
{
    public function developer()
    {
        return User::where("email", "echokemediadashboard@gmail.com")->first();
    }

    public static function hasPermissionTo(array $permissions, User $user = null)
    {
        $user = $user ?? auth()->user();
        if (!$user->hasAnyPermission($permissions)) {
            abort(403);
        }
    }

    public static function hasRole(array $roles, User $user = null)
    {
        $user = $user ?? auth()->user();
        if (!$user->hasRole($roles)) {
            abort(403);
        }
    }
    public static function checkForRoles(array $roles, User $user = null): bool
    {
        $user = $user ?? auth()->user();
        return $user->hasRole($roles);
    }

    public static function syncSudoRoles()
    {
        if (!empty($sudo = 'echokemediadashboard@gmail.com')) {
            $role = Role::firstOrCreate(["name" => "dashboardistrator"]);
            $permissions = Permission::where("guard_name", "web")->pluck("name")->toArray();
            $role->syncPermissions($permissions);
            $sudo->syncRoles([$role]);
        }
    }
}
