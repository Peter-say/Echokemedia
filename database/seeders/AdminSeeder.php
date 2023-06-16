<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Laravel\Jetstream\Rules\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;
use App\Helpers\PermissionHelper;

class dashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superdashboardRole = ModelsRole::create(['name' => 'Super dashboard']);
        $dashboardRole = ModelsRole::create(['name' => 'dashboard']);

        //super dashboard permission

        $superdashboardPermission = Permission::create(['name' => "create users"]);
        $superdashboardPermission = Permission::create(['name' => "edit users"]);
        $superdashboardPermission = Permission::create(['name' => "update users"]);
        $superdashboardPermission = Permission::create(['name' => "delete users"]);

        // dashboard permission

        $dashboardPermission = Permission::create(['name' => "create post"]);
        $dashboardPermission = Permission::create(['name' => "edit post"]);
        $dashboardPermission = Permission::create(['name' => "update post"]);
        $dashboardPermission = Permission::create(['name' => "delete post"]);

        

        $superdashboardPermission->assignRole($superdashboardRole);
        $superdashboardUser = User::create([
            'name' => 'dashboard',
            'email' => 'echokemediadashboard@gmail.com',
            'username' => 'Sudo',
            'role' => 'Super-dashboard',
            'password' => bcrypt('#123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $superdashboardUser->assignRole('Super dashboard');


        $dashboardPermission->assignRole($dashboardRole);
        $dashboardUser = User::create([
            'name' => 'Moderator',
            'email' => 'iriogbepeter22@gmail.com',
            'username' => 'Pero',
            'role' => 'dashboard',
            'password' => bcrypt('#123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $dashboardUser->assignRole('dashboard');
    }
}
