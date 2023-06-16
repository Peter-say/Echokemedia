<?php

namespace App\Helpers;
use App\Http\Controllers\Auth\AuthorizationServices;
use App\Services\Auth\AuthorizationService;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

Class PermissionHelper{
    public static function defaultPermission()
    {
        $data = array_merge(
            self::crud("user"),
            self::crud("post"),
            [
                [
                    "name" => "can_edit_dashboards",
                    "guard_name" => "web"
                ],
            ]
        );
        foreach ($data as $perm) {
            Permission::firstOrCreate($perm);
        }
        // AuthorizationServices::syncSudoRoles();
    }

    public function crud($model, array $actions = null, $guard = "web")
    {
        $list = [];
        foreach (["create", "read", "update", "delete"] as $action) {
            $list[] = [
                "name" => "can_" . $action . "_" . strtolower($model),
                "guard_name" => $guard,
            ];
        }
        return $list;
    }
  
}

?>