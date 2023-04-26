<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Laravel\Jetstream\Rules\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;
use App\Helpers\PermissionHelper;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminRole = ModelsRole::create(['name' => 'Super Admin']);
        $adminRole = ModelsRole::create(['name' => 'Admin']);

        //super admin permission

        $superAdminPermission = Permission::create(['name' => "create users"]);
        $superAdminPermission = Permission::create(['name' => "edit users"]);
        $superAdminPermission = Permission::create(['name' => "update users"]);
        $superAdminPermission = Permission::create(['name' => "delete users"]);

        // admin permission

        $adminPermission = Permission::create(['name' => "create post"]);
        $adminPermission = Permission::create(['name' => "edit post"]);
        $adminPermission = Permission::create(['name' => "update post"]);
        $adminPermission = Permission::create(['name' => "delete post"]);

        

        $superAdminPermission->assignRole($superAdminRole);
        $superAdminUser = User::create([
            'name' => 'Admin',
            'email' => 'echokemediaadmin@gmail.com',
            'username' => 'Sudo',
            'role' => 'Super-Admin',
            'password' => bcrypt('#123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $superAdminUser->assignRole('Super Admin');


        $adminPermission->assignRole($adminRole);
        $adminUser = User::create([
            'name' => 'Moderator',
            'email' => 'iriogbepeter22@gmail.com',
            'username' => 'Pero',
            'role' => 'Admin',
            'password' => bcrypt('#123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $adminUser->assignRole('Admin');
    }
}
