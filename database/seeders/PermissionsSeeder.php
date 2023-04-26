<?php

namespace Database\Seeders;

use App\Http\Controllers\Auth\AuthorizationServices;
use App\Services\Auth\AuthorizationService;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array_merge(
            $this->crud("users"),
            $this->crud("posts"),
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
        AuthorizationServices::syncSudoRoles();
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
